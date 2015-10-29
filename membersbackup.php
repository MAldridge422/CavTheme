<?php
/*
Template Name: Members2
*/

if (!is_user_logged_in()) {
  auth_redirect();
}

get_header();
?>
      <!--Upcoming Events-->
      <div id="upcomingevents">
        <h1>Upcoming Events</h1>
        <table>
<?php
$spreadsheet = "https://docs.google.com/spreadsheets/d/1O83QoVdi6R-yf7XJJa4UuSP44WPwL6ompZiY3AbhkwE/pub?output=csv";

$file = fopen($spreadsheet, "r");
if($file != false) {
  while(!feof($file)) {
    $line = fgetcsv($file);
    echo "          <tr>\n";
    foreach ($line  as $value) {
      echo "            <td>".$value."</td>\n";
    }
    echo "          </tr>\n";
  }
  fclose($file);
} else {
  echo "            <td>Sorry, we cannot connect to the schedule right now</td>\n";
}
?>
        </table>
      </div> <!--end upcoming events-->
<?php
ct_get_posts(array(
  'count' => 100,
  'indent' => "      ",
  'show_admin_posts' => false,
  'author_can' => ""
));

get_footer();
?>
