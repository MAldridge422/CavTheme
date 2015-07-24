<?php
/*
Template Name: Archives
*/
?>

<?php
get_header();
ct_get_posts(array(
  'count' => 100,
  'indent' => "      "
));
?>

<?php get_footer(); ?>