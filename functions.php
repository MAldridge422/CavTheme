<?php
function generate_menu() {
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
function generate_socialmedia() {
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