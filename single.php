<?php
get_header();

ct_get_a_post(array(
  'indent' => '    ',
  'meta' => array(
    'date' => true,
    'comments' => true
   )
));

get_footer();
?>