<?php
/* 
 * THIS FUNCTION CREATES THE MAIN MENU USING /CUSTOMIZE/MENU.TXT
 *
 */
function ct_generate_menu() {
  echo "            <ul>\n";
  $url = get_bloginfo('template_url')."/customize/menu.txt";
  $file = fopen($url,"r");
  while(!feof($file)) {
    $line = trim(fgets($file));
    if(substr($line, 0, 1) !== "#") {
      $splitline = explode(",",$line);
      if(trim($splitline[1]) == "{") {
        echo "              <li class='dropdown'><p>".$splitline[0]."</p>\n                <ul class='submenu'>\n";
        while(!feof($file)) {
          $line = trim(fgets($file));
          if($line == "}") {
            echo "                </ul>\n              </li>\n";
            break;
          }
          $splitline = explode(",",$line);
          $target = "";
          if(array_key_exists(2, $splitline)) {
            $target = "target='".trim($splitline[2])."'";
          }
          echo "                    <li><a href='".trim($splitline[1])."' ".$target.">".trim($splitline[0])."</a></li>\n";
        }
      } else {
        $target = "";
        if(array_key_exists(2, $splitline)) {
            $target = "target='".trim($splitline[2])."'";
        }
        echo "              <li><a href='".trim($splitline[1])."' ".$target.">".trim($splitline[0])."</a></li>\n";
      }
    }
  }
  fclose($file);
  echo "            </ul>\n";
}

/* 
 * THIS FUNCTION CREATES THE SOCIAL MEDIA MENU USING /CUSTOMIZE/MENU.TXT
 *
 */
function ct_generate_socialmedia() {
  echo "          <ul>\n";
  $url = get_bloginfo('template_url')."/customize/socialmedia.txt";
  $file = fopen($url,"r");
  while(!feof($file)) {
    $line = trim(fgets($file));
    if(substr($line, 0, 1) !== "#") {
      $splitline = explode(",",$line);
      $target = "";
      if(array_key_exists(3, $splitline)) {
          $target = "target='".trim($splitline[3])."'";
      }
      echo "            <li><a href='".trim($splitline[1])."' ".$target."><img src='".get_bloginfo('template_url').trim($splitline[2])."' alt='".trim($splitline[0])."' /></a></li>\n";
    }
  }
  echo "          </ul>\n";
}
?>
/*
 * THIS FUNCTION FINDS AND PRINTS MULTIPLE POSTS IN INDEX.PHP, ARCHIVE.PHP, ETC
 *
 * $count is an integer, how many posts to display
 * $indent is a string, how much to indent to make the code look good
 * $author_can is a string, what the author must be to see the post
 * $current_user_can is a string, what the current user must be to see the post
 * $adminposts is a boolean, whether or not to include posts made by administrators
 * $time is a boolean, whether or not to display the time posted
 *
 */
function ct_get_posts ($count = 3, $indent = '    ', $author_can = 'administrator', $current_user_can = '', $adminposts = true, $time = true) {
  query_posts('post_type=post'); //Allows "The Loop" to work
  echo $indent."<!--posts-->\n";
  echo $indent."<div class='posts'>\n";
  $counter = 0;
  if (have_posts()) {
    while ((have_posts()) && $counter < $count) {
      if($adminposts == true) {
        the_post();
        if((author_can(get_post(), $author_can) || $author_can == "") && (($current_user_can == "") || (current_user_can($current_user_can))) ) {
          echo $indent."  <div ";
          post_class();
          echo " >\n";
          echo $indent."    <h1 class='posttitle'><a href='".get_the_permalink()."'>".get_the_title()."</a></h1>\n";
          echo $indent."    "; the_content('');
          if($time == true) {
            echo $indent."    <p>Posted ".get_the_time('F jS, Y')."</p>";
          }
          echo "\n".$indent."  </div>\n";
          $counter++;
        }
      } else {
        the_post();
        if((author_can(get_post(), $author_can) || $author_can == "") && (($current_user_can == "") || (current_user_can($current_user_can))) && (author_can(get_post(), "administrator") == false) ) {
          echo $indent."  <div ";
          post_class();
          echo " >\n";
          echo $indent."    <h1 class='posttitle'><a href='".get_the_permalink()."'>".get_the_title()."</a></h1>\n";
          echo $indent."    "; the_content('');
          if($time == true) {
            echo $indent."    <p>Posted ".get_the_time('F jS, Y')."</p>";
          }
          echo "\n".$indent."  </div>\n";
          $counter++;
        }
      }
    }
  }
  echo $indent."</div>";
}

/*
 * THIS FUNCTION FINDS AND PRINTS A SINGLE POST IN SINGLE.PHP, PAGE.PHP, ETC
 *
 * $indent is a string, how much to indent to make the code look good
 * $time is a boolean, whether or not to display the time posted
 *
 */
function ct_get_a_post($indent = '    ', $time = true) {
  echo $indent."<!--posts-->\n";
  echo $indent."<div class='posts'>\n";
  if (have_posts()) {
    while (have_posts()) {
      if(author_can(get_post(), "administrator") || current_user_can("read")) {
        the_post();
        echo $indent."  <div ";
        post_class();
        echo ">\n";
        echo $indent."    <h1 class='posttitle'><a href='".get_the_permalink()."'>".get_the_title()."</a></h1>\n";
          echo $indent."    "; the_content('');
          if($time == true) {
            echo $indent."    <p>Posted ".get_the_time('F jS, Y')."</p>";
          }
          echo "\n".$indent."  </div>\n";
      } else {
        echo "<h1 class='error'> 404 ERROR page not found! </h1>";
        break;
      }
    }
  }
  echo $indent."</div>";
}

?>
