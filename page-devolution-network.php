<?php
/**
 * Description: Network Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
   
		<h1 class="text-center text-accent"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
				<?php the_content(); ?>
			</div>
		</div>
   	
	    <?php 
	      $args = array(
	       	'post_type' => 'network',
			'posts_per_page' => 100,
			'order' => 'asc',
			'orderby' => 'title'
	      );
	      $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) : 
			$networkcount=0;  
		?>
		  	<div class="network-members">
			  <div class="row">
				  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $networkcount++; ?>
					<div class="col-sm-4 network-member">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php the_post_thumbnail('thumbnail'); ?>
						<?php }	?>
						<h2><?php the_title(); ?></h2>
						<?php if(get_field('caption')) { ?>
							<p><?php the_field('caption'); ?></p>
						<?php } ?>
						<div class="network-member-info transition-quarter">
							<?php the_content(); ?>
						</div>
					</div>
					<?php if($networkcount % 3 == 0) { echo '</div><div class="row">'; } ?>		
				  <?php endwhile; ?>
			  </div>
			</div><!-- network-members -->
		 <?php endif; wp_reset_postdata(); ?>
         
		<?php if(get_field('call_to_action')) { ?>
			<br/>
			<div class="row">
				<div class="col-sm-12 text-center">
					<?php the_field('call_to_action'); ?>
				</div>
			</div>
		<?php } ?>
	
	</div>
<?php endwhile; endif; get_footer(); ?>