<?php
/**
Template Name: GMC
 * Description: Front Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php if(get_field('alternative_title')) { the_field('alternative_title'); } else { the_title(); } ?></h1>
     
          <?php the_content(); ?>

        <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
