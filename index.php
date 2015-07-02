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
        <p>Cavalier Robotics is a high school robotics team from Central Virginia.</p>
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
           <div class="column" id="center"><a href="http://www.virginiafirst.org/" target="_blank">
             <div class="columnimage">
               <img src="<?php bloginfo('template_url'); ?>/images/VAFIRST.jpg" alt="Virginia FIRST" />
             </div>
             <div class="columntext">
               <h1>VirginiaFIRST</h1>
               <p>Our state-wide FIRST affiliate.</p>
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
      <!--posts-->
      <div class="posts">
        <?php $counter = 0; ?>
        <?php if (have_posts()) : ?>
        <?php while ((have_posts()) && $counter < 3) : the_post(); ?>
        <div <?php post_class() ?>>
          <h1 class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
          <?php the_content('');?>
          <p>Posted <?php the_time('F jS, Y') ?></p>
        </div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif; ?>
      </div>
<?php get_footer(); ?>