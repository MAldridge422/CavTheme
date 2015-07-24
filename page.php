<?php
get_header();

ct_get_a_post(array(
  'indent' => '    ',
  'meta' => array(
    'date' => false,
    'comments' => false
  )
));

get_footer();
?>