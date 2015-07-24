<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yeseva+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <meta name="keywords" content="Team,619,Cavalier,Robotics,FIRST,UVA,University,of,Virginia,FRC">
    <meta name="description" content="Website of FIRST Robotics Competition Team 619: Cavalier Robotics">
    <meta charset="UTF-8">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="centeredcontainer">
      <div class="header">
        <a href="/index.php"><img src="<?php bloginfo('template_url'); ?>/images/cover.png" alt="Cover" id="headerCover"></a>
        <div class="navbar">
          <div class="menu">
<?php ct_generate_menu(); ?>
          </div> <!--end menu-->
        </div> <!--end navbar-->
        <div class="socialmedia">
<?php ct_generate_socialmedia(); ?>
        </div> <!--end socialmedia-->
      </div> <!--end header-->