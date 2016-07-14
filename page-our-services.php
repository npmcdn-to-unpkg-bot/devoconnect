<?php
/*
Template Name: Services
 * Description: Services Page template
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
        <br>
          <?php if ( have_rows('services_bullets') ) : ?>
            <div class="row row-high">
              <?php $count=1; while ( have_rows('services_bullets') ) : the_row(); ?>
              <div class="col-sm-4 services-bullet">
                <div class="col-sm-3">
                  <div class="count"><?php echo $count; ?></div>
                </div>
                <div class="col-sm-9">
                  <p><?php the_sub_field('services_bullet') ?></p>
                </div>   
             </div>
           <?php if($count%3 == 0){ echo '</div><div class="row row-high">' ;} ?>
           <?php $count++; endwhile; ?>
          </div>
        <?php endif; ?>
		<?php if(get_field('call_to_action')) { ?>
			<br/>
			<div class="row call-to-action">
				<div class="col-sm-12 text-center">
					<?php the_field('call_to_action'); ?>
				</div>
			</div>
		<?php } ?>
	
	</div>
<?php endwhile; endif; get_footer(); ?>