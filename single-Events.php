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
            <h2><?php the_field('event_subtitle') ?></h2>
			 <div class="post-details text-accent clearfix">
				<?php
				  $author_id = get_the_author_meta( 'ID' );
				  $author_badge = get_field('profile_picture', 'user_'. $author_id );
				  $size = 'thumbnail';
				  $image = wp_get_attachment_image_src( $author_badge, $size );
				?>
				<p>Event Date: <?php the_field('event_date'); ?></small></p>
			</div>
			 
         	 <?php the_content(); ?>
		  
			  <?php if(get_field('article_link')) { ?>
				<br/>
				<a href="<?php the_field('article_link'); ?>" class="btn btn-primary">Read More</a>
			  <?php } ?>
		  
			  <br/><br/>
			  <?php echo do_shortcode('[ssba]'); ?>
			  
			  <div class="page-navigation clearfix">
					<span class="nav-previous"><?php previous_post_link('%link','&laquo; %title', true); ?></span>
					<span class="nav-next"><?php next_post_link('%link','%title &raquo;', true); ?></span>
				</div>

        <?php endwhile; endif; ?>
    </div>
    <aside class="col-sm-4 sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
