<?php
/**
 * Description: Contact Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
		<div class="text-center">
			<h1><?php if(get_field('alternative_title')) { the_field('alternative_title'); } else { the_title(); } ?></h1>
		</div>
       	<div class="row">
			<div class="col-sm-2 contact-areas">
				<p><strong>Operating in:</strong></p>
				<p>London</p>
				<p>Manchester</p>
				<p>Birmingham</p>
				<p>Liverpool</p>
				<p>Leeds</p>
				<p>Cardiff</p>
				<p>Edinburgh</p>
				<p>Belfast</p>
			</div>
			<div class="col-sm-4 contact-map">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/contact-map.png" alt="United Kingdom map" class="img-responsive" />
			</div>
			<div class="col-sm-6 contact-information">
				<?php the_content(); ?>
			</div>
		</div>
		
	</div>
		       
<?php endwhile; endif; get_footer(); ?>