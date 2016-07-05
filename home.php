<?php
/**
 * Description: Blog listing template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="container">
		
        <header class="page-header">
			<h1 class="text-center text-accent"><?php _e('Devolution Intelligence', 'DevoConnect'); ?></h1>
			<p class="text-center"><?php _e('The latest news and views from DevoIntelligence.', 'DevoConnect'); ?></p>
			<hr/>
			<form class="form-inline">
			  <div class="form-group">
				<label for="exampleInputName2">Receive the latest devolution news direct to your inbox &nbsp;&nbsp;</label>
				<label class="sr-only" for="name">Name</label>
				<input type="text" class="form-control"	placeholder="Your Name">
			  </div>
			  <div class="form-group">
				<label class="sr-only" for="email">Email address</label>
				<input type="email" class="form-control" placeholder="Your Email">
			  </div>
			  <button type="submit" class="btn btn-primary">Subscribe</button>
			</form>
        </header>
		<div class="row">
			<div class="articles">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="post-excerpt <?php if(get_field('featured')) { echo 'col-sm-6'; } else { echo 'col-sm-3'; } ?>">
						<?php 
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium');
							}
						?>
						<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<?php // echo do_shortcode('[ssba]'); ?>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</div>
    <nav class="pagination">
        <?php blaze_paginate($query); ?>
        <br class="clear" />
    </nav>
</div>
<?php get_footer(); ?>
