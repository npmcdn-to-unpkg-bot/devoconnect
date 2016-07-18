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
          <h1>
			<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'summit' ), '<span>' . get_the_date() . '</span>' ); ?>
			<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', 'summit' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'summit' ) ) . '</span>' ); ?>
			<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', 'summit' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'summit' ) ) . '</span>' ); ?>
			<?php elseif ( is_author() ) : ?>
				Articles by <span><?php the_author(); ?></span>
			<?php else : ?>
				<?php single_cat_title(); ?>
			<?php endif; ?>
          </h1>
        </header>
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="post-excerpt">
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}
				?>	
				<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
				<p class="text-accent"><?php $author_id = get_the_author_meta( 'ID' ); if($author_id == '1') { } else { ?>by <strong><?php the_author(); ?></strong><?php } ?> on <?php the_time('F j, Y'); ?></small></p>
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
