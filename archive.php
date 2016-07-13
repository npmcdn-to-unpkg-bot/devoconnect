<?php
/**
 * Description: Blog listing template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <header class="page-header">
          <h1><?php wp_title(''); ?></h1>
        </header>
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="post-excerpt">
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}
				?>	
				<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
				<p class="text-accent"><small>by <strong><?php the_author(); ?></strong> on <?php the_time('F j, Y'); ?></small></p>
			<?php the_excerpt(); ?>
			</article>
			<hr>
        <?php endwhile; endif; ?>
    </div>
    <div class="col-sm-4 sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
