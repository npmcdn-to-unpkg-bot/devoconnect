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

			<img src="<?php bloginfo('template_directory'); ?>/assets/img/devo-intelligence.jpg" alt="Devo Intelligence" class="devo-intelligence" />

			<h1>News and Views</h1>

			<hr/>
			<?php include('partials/signup.php');?>
        </header>

    <div class="row">
      <div class="col-sm-9">
            <h2><?php _e('News', 'devo') ?></h2>
            <hr>
    		<div class="row">
    			<div class="articles">
    				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    					<article class="post-excerpt <?php if(get_field('featured')) { echo 'col-sm-12'; } else { echo 'column-width col-sm-12 col-md-6'; } ?>">
    						<?php if ( has_post_thumbnail() ) { ?>
    							<a href="<?php the_permalink() ;?>" class="article-img-link">
    								<?php if(get_field('featured')) { the_post_thumbnail('featuredimage'); } else { the_post_thumbnail('medium'); } ?>
    							</a>
    						<?php }	?>
    						<h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
    						<p class="text-accent"><?php $author_id = get_the_author_meta( 'ID' ); if($author_id == '1') { } else { ?>by <strong><?php the_author(); ?></strong><?php } ?> on <?php the_time('F j, Y'); ?></small></p>
    						<?php the_excerpt(); ?>
    						<?php // echo do_shortcode('[ssba]'); ?>
    						<hr/>
    					</article>
    				<?php endwhile; endif; ?>
    			</div>
    		</div>
      </div>
      <div class="col-sm-3 column-events">
      <h2><?php _e('Events', 'devo') ?></h2>
      <hr>
        <?php
            $args = array(
                'post_type' => 'Events',
                'posts_per_page' => 3
            );
            $events = new WP_Query($args);
            if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post(); 
        ?>
        <article>
            <h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
            <h4 class="event-subtitle"><?php if(get_field('event_subtitle')) : the_field('event_subtitle'); endif; ?></h4>
            <p class="text-accent"><?php $author_id = get_the_author_meta( 'ID' ); if($author_id == '1') { } else { ?>by <strong><?php the_author(); ?></strong><?php } ?> on <?php the_field('event_date'); ?></small></p>
            <?php the_content('<br/>READ MORE &raquo;'); ?>
            <hr/>
        </article>
        <?php endwhile; endif; ?>
      </div>
    </div>

    <nav class="pagination">
        <?php blaze_paginate($query); ?>
        <br class="clear" />
    </nav>
	<br/>
	<hr/>
	<div class="twitter-feed clearfix">
		<h3 class="text-center text-accent">Follow us on Twitter: <a href="https://twitter.com/DevoConnect">@DevoConnect</a></h3>

	    <?php if ( ! dynamic_sidebar( 'twitter' )  ) : ?><?php endif; ?>
	</div>

</div>
<?php get_footer(); ?>
