<?php
/**
 * Description: Blog listing template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="container">
    <div class="row">
        <header class="page-header">
          <h1 class="text-center text-accent"><?php _e('Read all about it!', 'DevoConnect'); ?></h1>
          <p class="text-center"><?php _e('The latest news and views from DevoIntelligence.', 'DevoConnect'); ?></p>
        </header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="post-excerpt">
          <h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
          </em></p>
          <?php the_excerpt(); ?>
        </article>
        <hr>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="row">
    <nav class="pagination">
        <?php blaze_paginate($query); ?>
        <br class="clear" />
    </nav>
  </div>
</div>
<?php get_footer(); ?>
