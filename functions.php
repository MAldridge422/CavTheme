<?php
/* MENU FUNCTIONS */
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

/* POST FUNCTIONS */
/*
 * THIS FUNCTION FINDS AND PRINTS MULTIPLE POSTS IN INDEX.PHP, ARCHIVE.PHP, ETC
 *
 * $params is an array which holds all of the many optional parameters for this function
 * $params['count'] is an integer, how many posts to display
 * $params['indent'] is a string, how much to indent to make the code look good
 * $params['author_can'] is a string, what the author must be to see the post
 * $params['current_user_can'] is a string, what the current user must be to see the post
 * $params['show_admin_posts'] is a boolean, whether or not to include posts made by administrators
 * $params['meta'] is an array, which meta data to display
 *     $params['meta']['date'] is a boolean, whether or not to display the date a post was made
 *     $params['meta']['comments'] is a boolean, whether or not to display how many comments are on a post
 *
 */
function ct_get_posts ($params) {

  //Set default parameter values if null or invalid input
  if(!array_key_exists('count', $params) || !is_int($params['count'])) {
    $params['count'] = 3;
  }
  if(!array_key_exists('indent', $params) || !is_string($params['indent'])) {
    $params['indent'] = '    ';
  }
  if(!array_key_exists('author_can', $params) || !is_string($params['author_can'])) {
    $params['author_can'] = 'administrator';
  }
  if(!array_key_exists('current_user_can', $params) || !is_string($params['current_user_can'])) {
    $params['current_user_can'] = '';
  }
  if(!array_key_exists('show_admin_posts', $params) || !is_bool($params['show_admin_posts'])) {
    $params['show_admin_posts'] = true;
  }
  if(!array_key_exists('meta', $params) || !is_array($params['meta'])) {
    $params['meta'] = array(
      'date' => true,
      'comments' => true
    );
  } else {
    if(!array_key_exists('date', $params['meta']) || !is_bool($params['meta']['date'])) {
      $params['meta']['date'] = true;
    }
    if(!array_key_exists('comments', $params['meta']) || !is_bool($params['meta']['comments'])) {
      $params['meta']['comments'] = true;
    }
  }

  query_posts('post_type=post'); // Allows "The Loop" to work
  echo $params['indent']."<!--Posts-->\n".$params['indent']."<div class='posts'>\n";
  $counter = 0;
  if (have_posts()) {
    while ((have_posts()) && $counter < $params['count']) {
      the_post();
      if(
        (author_can(get_post(), $params['author_can']) || $params['author_can'] == "")
        &&
        (current_user_can($params['current_user_can']) || $params['current_user_can'] == "")
        &&
        ($params['show_admin_posts'] == true || author_can(get_post(), "administrator") == false)
      ) {
        echo $params['indent']."  <div ";
        post_class();
        echo " >\n";
        echo $params['indent']."    <h1 class='posttitle'><a href='".get_the_permalink()."'>".get_the_title()."</a></h1>\n";
        echo $params['indent']."    <div class='meta'>\n";
        if($params['meta']['date'] == true) {
          echo $params['indent']."      <p class='date'>".get_the_time('F jS, Y')."</p>\n";
        }
	if($params['meta']['comments'] == true) {
          echo $params['indent']."      <p class='comments'>".get_comments_number()." Comments</p>\n";
        }
        echo $params['indent']."    </div>\n".$params['indent']."    ";
        the_content('');
        echo $params['indent']."  </div>\n";
        $counter++;
      }
    }
  }
  echo $params['indent']."</div><!--end posts-->";
}

/*
 * THIS FUNCTION FINDS AND PRINTS A SINGLE POST IN SINGLE.PHP, PAGE.PHP, ETC
 *
 * $params is an array which holds all of the many optional parameters for this function
 * $params['indent'] is a string, how much to indent to make the code look good
 * $params['meta'] is an array, which meta data to display
 *     $params['meta']['date'] is a boolean, whether or not to display the date a post was made
 *     $params['meta']['comments'] is a boolean, whether or not to display how many comments are on a post
 *
 */
function ct_get_a_post($params) {
  //Set default parameter values if null or invalid input
  if(!array_key_exists('indent', $params) || !is_string($params['indent'])) {
    $params['indent'] = '    ';
  }
  if(!array_key_exists('meta', $params) || !is_array($params['meta'])) {
    $params['meta'] = array(
      'date' => true,
      'comments' => true
    );
  } else {
    if(!array_key_exists('date', $params['meta']) || !is_bool($params['meta']['date'])) {
      $params['meta']['date'] = true;
    }
    if(!array_key_exists('comments', $params['meta']) || !is_bool($params['meta']['comments'])) {
      $params['meta']['comments'] = true;
    }
  }

  $num_comments = 3; //TODO: fix this
  echo $params['indent']."<!--Posts-->\n";
  echo $params['indent']."<div class='posts'>\n";
  if (have_posts()) {
    while (have_posts()) {
      if(author_can(get_post(), "administrator") || current_user_can("read")) {
        the_post();
        echo $params['indent']."  <div ";
        post_class();
        echo ">\n";
        echo $params['indent']."    <h1 class='posttitle'><a href='".get_the_permalink()."'>".get_the_title()."</a></h1>\n";
        echo $params['indent']."    <div class='meta'>\n";
        if($params['meta']['date'] == true) {
          echo $params['indent']."      <p class='date'>".get_the_time('F jS, Y')."</p>\n";
        }
	if($params['meta']['comments'] == true) {
          echo $params['indent']."      <p class='comments'>".get_comments_number()." Comments</p>\n";
        }
        echo $params['indent']."    </div>\n".$params['indent']."    ";
        the_content('');
        echo $params['indent']."  </div>\n";
      } else {
        $redirect = set_url_scheme( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
        $login_url = wp_login_url($redirect, true);
        echo "      <h1>Please <a class='underline' href='".$login_url."'>log in</a> to view this post.</h1>";
        break;
      }
    }
  }
  echo "\n".$params['indent']."</div> <!--end posts-->";
}

/* OTHER FUNCTIONS */
/* 
 * THIS FUNCTION MAKES DASHICONS USABLE
 *
 */
add_action( 'wp_enqueue_scripts', 'themename_scripts' );
function themename_scripts() {
    wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}
?>
