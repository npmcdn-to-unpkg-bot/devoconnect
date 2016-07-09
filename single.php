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
		
         
            <h1><?php the_title(); ?></h1>
			 <p class="text-accent"><?php the_time('F j, Y'); ?></p>
			 <br/>
         	 <?php the_content(); ?>
		  
			  <?php if(get_field('article_link')) { ?>
				<br/>
				<a href="<?php the_field('article_link'); ?>" class="btn btn-primary">Read More</a>
			  <?php } ?>
		  
			  <br/><br/>
			  <?php echo do_shortcode('[ssba]'); ?>

        <?php endwhile; endif; ?>
    </div>
    <aside class="col-sm-4 sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
