<?php get_header(); ?>

      <!--Slider-->
      <div class="slider">
        <div class="slide active-slide">
          <img id="slide1" src="<?php bloginfo('template_url'); ?>/images/1.JPG" /> 
        </div>
        <div class="slide">
          <img id="slide2" src="<?php bloginfo('template_url'); ?>/images/2.JPG" /> 
        </div>
        <div class="slide">
          <img id="slide3" src="<?php bloginfo('template_url'); ?>/images/3.JPG" /> 
        </div>
        <div class="slide">
          <img id="slide4" src="<?php bloginfo('template_url'); ?>/images/4.JPG" /> 
        </div>
      </div>
      <!-- Team Summary -->
      <div class="teamSummary">
        <p>Team 619 is a high school robotics team from Central Virginia.</p>
      </div>
      <!--3 Column Layout-->
      <div class="threecolumnlayout">
           <div class="column" id="left"><a href="<?php bloginfo('template_url'); ?>/contact-us/">
             <div class="columnimage">
               <img src="<?php bloginfo('template_url'); ?>/images/Logo.png" alt="Join Us" />
             </div>
             <div class="columntext">
               <h1>Contact Us!</h1>
               <p>Reach out to Team 619 through email or social media!</p>
             </div>
           </a></div>
           <div class="column" id="center"><a href="http://www.amazon.com/b//ref=as_sl_pc_tf_lc?node=2238192011&tag=charloalbemar-20&camp=217361&creative=401093&linkCode=ur1&adid=0GCRTZ7BKA999JWVJT7G&&ref-refURL=http%3A%2F%2Frcm-na.amazon-adsystem.com%2Fe%2Fcm%3Ft%3Dcharloalbemar-20%26o%3D1%26p%3D12%26l%3Dur1%26category%3Dgiftcardsnonamazon%26banner%3D12FF4M1CP3H5WZMCHC82%26f%3Difr%26linkID%3DF5DIF4R3WOZHKECF" target="_blank">
<div class="columnimage">
<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=charloalbemar-20&o=1&p=12&l=ur1&category=giftcardsnonamazon&banner=12FF4M1CP3H5WZMCHC82&f=ifr&linkID=F5DIF4R3WOZHKECF" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
             <div class="columntext">
               <h1>Amazon</h1>
               <p>Support us by clicking on the link before placing an order on Amazon</p>
             </div>
           </a></div>
           <div class="column" id="right"><a href="http://www.usfirst.org/" target="_blank">
             <div class="columnimage">
               <img src="<?php bloginfo('template_url'); ?>/images/FIRST.png" alt="FIRST" />
             </div>
             <div class="columntext">
               <h1>FIRST</h1>
               <p>For Inspiration and Recognition of Science and Technology.</p>
             </div>
           </a></div>
      </div>

<?php
ct_get_posts(array(
  'count' => 3,
  'indent' => "      "
));
?>

<?php get_footer(); ?>
