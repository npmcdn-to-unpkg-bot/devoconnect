<?php
/**
 * Description: Front Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>
 
<div class="container"> 
  <div class="jumbotron">
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      	<h1><?php if(get_field('alternative_title')) { the_field('alternative_title'); } else { the_title(); } ?></h1>

        <?php the_content(); ?>
   
		<hr/>
		
		<?php echo do_shortcode('[interactive_map id="5"]' ); ?>
  
   
		<hr/>
			
		<div class="row">
			<div class="col-sm-12">
				<h2>Devolution Services</h2>
			</div>
		</div>
			
		  <?php if(have_rows('services_blob')) :?>
				<div class="row flex flex-center flex-row services-blobs">
				  <?php while(have_rows('services_blob')) : the_row(); ?>
					<a href="<?php the_sub_field('services_link'); ?>">
						<div class="services-blob">
							<?php the_sub_field('services_text'); ?>
						</div>
					</a>
				  <?php endwhile; ?>
				</div>
		  
		  <?php endif; ?>
		
	 </div><!-- jumbotron -->	
		
  <?php 
    $args = array(
        'post_type' => 'post',
		'posts_per_page' => 3	
      );
    // The Query
    $the_query = new WP_Query( $args );
     
    // The Loop
    if ( $the_query->have_posts() ) : ?>
    <h2 class="text-accent text-center"><?php _e('Devolution Intelligence', 'DevoConnect');?></h2>
    <br>
    <br>

    <div class="row">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
      <div class="col-sm-4">
        <div class="card">
          <a href="<?php the_permalink(); ?>">
			  <?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'card-img' ) );?>
		  </a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
          <?php the_excerpt(); ?>
        </div>
      </div>

    <?php endwhile; ?>
    </div>
  <?php endif; wp_reset_postdata(); ?>
 
		<br/>
	  <hr/>
  	<?php include('partials/signup.php');?>
</div><!-- container -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>