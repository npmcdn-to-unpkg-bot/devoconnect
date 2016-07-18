<?php
/**
 * Description: Front Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>
 

    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="devo-intro">
			<div class="carousel">
				<div class="slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/carousel/speed.jpg)"></div>
				<div class="slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/carousel/river.jpg)"></div>
				<div class="slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/carousel/sunset.jpg)"></div>
			</div>
			<div class="caption">
				<div class="container">
					<h1><?php if(get_field('alternative_title')) { the_field('alternative_title'); } else { the_title(); } ?></h1>	
				</div>
			</div>
		</div>
		  
	<div class="container"> 
	  <div class="jumbotron">
		
		<div class="row">
			<div class="col-sm-12 col-lg-10 col-lg-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
   
		
		<?php /* 
		<hr/>
		
		 echo do_shortcode('[interactive_map id="5"]' );
  
   
		<hr/> 
		*/ ?>
			
		<div class="row">
			<div class="col-sm-12">
				<h2>Devolution <a href="<?php bloginfo('url'); ?>/our-services/">Services</a></h2>
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
		'posts_per_page' => 3,
		'meta_key'		=> 'featured',
		'meta_value'	=> true,
      );
    // The Query
    $the_query = new WP_Query( $args );
     
    // The Loop
    if ( $the_query->have_posts() ) : ?>
    <h2 class="text-accent text-center">Devolution <a href="<?php bloginfo('url'); ?>/news/">News &amp; Views</a></h2>
	
	<a href="<?php bloginfo('url'); ?>/news/">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/devo-intelligence.jpg" alt="Devo Intelligence" class="devo-intelligence" />
	</a>
	
    <div class="row">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
      <div class="col-sm-4">
        <div class="card">
			<?php if ( has_post_thumbnail() ) { ?>	
				<a href="<?php the_permalink(); ?>" class="card-img-link">
			  	  <?php echo get_the_post_thumbnail( $post_id, 'homenews', array( 'class' => 'card-img' ) );?>
		  		</a>
			<?php } ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		  <p class="text-accent"><small><?php $author_id = get_the_author_meta( 'ID' ); if($author_id == '1') { } else { ?>by <strong><?php the_author(); ?></strong><?php } ?> on <?php the_time('F j, Y'); ?></small></p>
          <?php the_excerpt(); ?>
        </div>
      </div>

    <?php endwhile; ?>
    </div>
  <?php endif; wp_reset_postdata(); ?>
  		<br/>
		<div class="text-center">
			<a href="<?php bloginfo('url'); ?>/news/" class="btn btn-primary">View more Articles</a>
		</div>
	
		<br/>
	  <hr/>
  	<?php include('partials/signup.php');?>
<?php endwhile; endif; ?>	
</div><!-- container -->


<?php get_footer(); ?>