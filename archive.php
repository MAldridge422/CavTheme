<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<!--posts-->
      <div class="posts">
<?php
$args = array( 'posts_per_page' => 100, 'offset'=> 0);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div <?php post_class() ?>>
          <h1 class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
          <?php the_content('');?>
          <p>Posted <?php the_time('F jS, Y') ?></p>
        </div>
<?php endforeach;
wp_reset_postdata();?>
      </div>

<?php get_footer(); ?>