<?php
/**
 * Description: Front Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="jumbotron">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      	<h1 class="jumbo"><?php the_field('jumbo_title'); ?></h1>

        <?php the_content(); ?>

        <?php if(have_rows('services_blob')) : while(have_rows('services_blob')) : the_row(); ?>
		<div class="services-blob">
			<?php the_sub_field('services_text'); ?>
		</div>
		<?php endwhile; endif; ?>

      <?php endwhile; endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
