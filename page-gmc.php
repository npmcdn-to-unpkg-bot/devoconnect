<?php
/*
Template Name: GMC
 * Description: Front Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="devo-intro">
		<div class="carousel">
			<div class="slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/carousel/river-night.jpg)"></div>
		<!--	<div class="slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/carousel/river.jpg)"></div>
			<div class="slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/carousel/sunset.jpg)"></div> -->
		</div>
		<div class="caption">
			<div class="container">
				<h1><?php if(get_field('alternative_title')) { the_field('alternative_title'); } else { the_title(); } ?></h1>	
			</div>
		</div>
	</div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">  
     
          <?php the_content(); ?>
		  
      </div>
    </div>
	

		  <div class="gallery row">
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/certificates.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-6">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/conference.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/connect-award.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/connect-celebration.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/corbyn.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/crowd.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/event.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/gill-and-miliband.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/gill-award-2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/gill-award-3.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/gill-award.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/labour.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/lineup.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/lineup2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-6">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/mosaic.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/outside.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/panel.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/panel1.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/panel2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/panel3.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/party.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/people.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/people2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/people3.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/pimlico-plumbers.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/pimlico-plumbers-2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/santa.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/scuba.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/scuba2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/shindig.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/speaking.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/speaking2.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/stronger-for-scotland.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/thames.jpg" />
			  </a>
			  <a href="#" class="gallery-item col-sm-3">
				  <img src="<?php bloginfo('template_directory'); ?>/assets/img/gallery/winning.jpg" />
			  </a>
		  </div>
        

</div><!-- container -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
