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
			<?php include('partials/signup.php');?>
        </header>
		<div class="row">
			<div class="articles">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="post-excerpt <?php if(get_field('featured')) { echo 'col-sm-6'; } else { echo 'col-sm-3'; } ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink() ;?>">
								<?php if(get_field('featured')) { the_post_thumbnail('featuredimage'); } else { the_post_thumbnail('medium'); } ?>
							</a>
						<?php }	?>
						<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
						<p class="text-accent"><small><?php the_time('F j, Y'); ?></small></p>
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
