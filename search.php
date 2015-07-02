<?php get_header(); ?>


      <!--posts-->
      <div class="posts">
        <?php if (have_posts()) : ?>

        <h1>Search results for <?php the_search_query() ?></h1>

        <?php if (is_category()) { ?>
          <h2 class="posttitle"><?php the_time('F, Y'); ?></h2>
        <?php } ?>

        <?php while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?>>
          <h1 class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
          <?php the_content('');?>
          <ul class="meta">
            <li>Posted <?php the_time('F jS, Y') ?></li>
          </ul>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
<?php get_footer(); ?>