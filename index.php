<?php get_header(); ?>

      <!--Slider-->
      <div class="slider">
        <div class="buttons">
          <a id="prev" href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/arrow2.png" /></a>
          <a id="next" href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/arrow.png" /></a>
        </div>
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
           <div class="column" id="center">
             <div class="columnimage">
<script type='text/javascript'>
 amzn_assoc_ad_type = 'banner';
 amzn_assoc_tracking_id = 'charloalbemar-20';
 amzn_assoc_marketplace = 'amazon';
 amzn_assoc_region = 'US';
 amzn_assoc_placement = 'assoc_banner_placement_default';
 amzn_assoc_linkid = 'TTGYQMLWKGHQDMFX';
 amzn_assoc_campaigns = 'amazonhomepage';
 amzn_assoc_p = '9';
 amzn_assoc_banner_type = 'rotating';
 amzn_assoc_width = '180';
 amzn_assoc_height = '150';
</script>
<script src='//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1'></script>
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
