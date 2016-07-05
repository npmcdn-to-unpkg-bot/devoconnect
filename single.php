<?php
/**
 * Description: Single Blog template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				}
			?>
		
          <header class="page-header">
            <h1><?php the_title(); ?></h1>
          </header>
          <?php the_content(); ?>
		  <?php echo do_shortcode('[ssba]'); ?>

        <?php endwhile; endif; ?>
    </div>
    <aside class="col-sm-4 sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
