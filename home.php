<?php
/**
 * Description: Blog listing template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="container">
		
        <header class="page-header text-center">
			<h1>Latest News and Views</h1>
			
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/devo-intelligence.jpg" alt="Devo Intelligence" class="devo-intelligence" />
			
			<hr/>
			<?php include('partials/signup.php');?>
        </header>
		<div class="row">
			<div class="articles">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="post-excerpt <?php if(get_field('featured')) { echo 'col-sm-6'; } else { echo 'col-sm-3'; } ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink() ;?>" class="article-img-link">
								<?php if(get_field('featured')) { the_post_thumbnail('featuredimage'); } else { the_post_thumbnail('medium'); } ?>
							</a>
						<?php }	?>
						<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
						<p class="text-accent"><small>by <strong><?php the_author(); ?></strong> on <?php the_time('F j, Y'); ?></small></p>
						<?php the_excerpt(); ?>
						<?php // echo do_shortcode('[ssba]'); ?>
						<hr/>
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
