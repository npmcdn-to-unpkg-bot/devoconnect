<?php
/**
 * Description: Front Page template
 *
 * @package    WordPress
 * @subpackage DevoConnect
 */
get_header(); ?>
  <?php 
    if(has_post_thumbnail()) {
      echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'banner-img' ) );
    }
  ?>
  <div class="jumbotron">
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      	<h1><?php the_field('jumbo_title'); ?></h1>
        <br>

        <?php the_content(); ?>
        <br>

        <?php if(have_rows('services_blob')) :?>
          <div class="row flex flex-center flex-row">
          <?php while(have_rows('services_blob')) : the_row(); ?>
            <div class="services-blob">
              <?php the_sub_field('services_text'); ?>
            </div>  
		      <?php endwhile; ?>
        </div>
    </div>
  </div>
  <?php endif; ?>
  <?php 
    $args = array(
        'post_type' => 'post',
		'posts_per_page' => 3	
      );
    // The Query
    $the_query = new WP_Query( $args );
     
    // The Loop
    if ( $the_query->have_posts() ) : ?>
    <h2 class="text-accent text-center"><?php _e('Devolution Intelligence', 'DevoConnect');?></h2>
    <br>
    <br>
    <div class="container">
    <div class="row">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
      <div class="col-sm-4">
        <div class="card">
          <a href="<?php the_permalink(); ?>">
			  <?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'card-img' ) );?>
		  </a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
          <?php the_excerpt(); ?>
        </div>
      </div>

    <?php endwhile; ?>
    </div>
  </div>
  <?php endif; wp_reset_postdata(); ?>
 
  <br>
  <div class="container">
	  <hr/>
  	<?php include('partials/signup.php');?>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>