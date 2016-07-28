<?php
/*
Template Name: Map
 * Description: Map Page template
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
		<hr/>
		<?php echo do_shortcode('[interactive_map id="5"]' ); ?>
		<hr/> 
	</div>
<?php endwhile; endif; get_footer(); ?>