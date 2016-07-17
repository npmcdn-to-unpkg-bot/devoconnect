<?php
/*
Template Name: Network
 * Description: Network Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
   
		
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
				<h1><?php if(get_field('alternative_title')) { the_field('alternative_title'); } else { the_title(); } ?></h1>	
				<?php the_content(); ?>
			</div>
		</div>
		
		<br/>
		<hr/>
		
		<h2 class="text-center text-accent">Devo North</h2>
   	
	    <?php 
	      $args = array(
	       	'post_type' => 'network',
			'posts_per_page' => 100,
			'order' => 'asc',
			// 'orderby' => 'title',
			'meta_key'		=> 'region',
			'meta_value'	=> 'North',
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
		 
		 <br/>
		 <hr/>
		 
		 <h2 class="text-center text-accent">Devo Scotland</h2>
   	
	    <?php 
	      $args = array(
	       	'post_type' => 'network',
			'posts_per_page' => 100,
			'order' => 'asc',
			// 'orderby' => 'title',
			'meta_key'		=> 'region',
			'meta_value'	=> 'Scotland',
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
		 
		 <br/>
		 <hr/>
		 
		 <h2 class="text-center text-accent">Devo Wales</h2>
   	
	    <?php 
	      $args = array(
	       	'post_type' => 'network',
			'posts_per_page' => 100,
			'order' => 'asc',
			// 'orderby' => 'title',
			'meta_key'		=> 'region',
			'meta_value'	=> 'Wales',
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
		 
		 <br/>
		 <hr/>
         
		 <h2 class="text-center text-accent">Devo Northern Ireland</h2>
   	
	    <?php 
	      $args = array(
	       	'post_type' => 'network',
			'posts_per_page' => 100,
			'order' => 'asc',
			// 'orderby' => 'title',
			'meta_key'		=> 'region',
			'meta_value'	=> 'Northern Ireland',
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
		 
		 <br/>
		 <hr/>
		 
		 <h2 class="text-center text-accent">Devo Connect</h2>
   	
	    <?php 
	      $args = array(
	       	'post_type' => 'network',
			'posts_per_page' => 100,
			'order' => 'asc',
			// 'orderby' => 'title',
			'meta_key'		=> 'region',
			'meta_value'	=> 'Connect',
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
			<br/><br/>
			<hr/>
			<br/>
			<div class="row call-to-action">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
					<?php the_field('call_to_action'); ?>
				</div>
			</div>
		<?php } ?>
	
	</div>
<?php endwhile; endif; get_footer(); ?>