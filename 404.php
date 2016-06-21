<?php
/**
 * Description: 404 not found template
 *
 * @package    WordPress
 * @subpackage BlazeBase
 */
get_header(); ?>
<div class="container">
  <div class="row page-header">
    <div class="col-sm-12">
        <h1><?php _e('404 - page not found.'); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <p><?php _e('I\'m afraid that page cannot be found. Please choose a page from the site map below,');?>
        <a href="<?php bloginfo('url');?>">
          <?php _e('or go back to the homepage &raquo;'); ?>
        </a>
      </p>
      <br/>
      <h2 id="authors">Authors</h2>
      <ul>
      <?php
      wp_list_authors(
        array(
          'exclude_admin' => false,
        )
      );
      ?>
      </ul>

      <h2 id="pages">Pages</h2>
      <ul>
      <?php
      // Add pages you'd like to exclude in the exclude here
      wp_list_pages(
        array(
          'exclude' => '',
          'title_li' => '',
        )
      );
      ?>
      </ul>

      <h2 id="posts">Posts</h2>
      <ul>
      <?php
      // Add categories you'd like to exclude in the exclude here
      $cats = get_categories('exclude=');
      foreach ($cats as $cat) {
        echo "<li><h3>".$cat->cat_name."</h3>";
        echo "<ul>";
        query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
        while(have_posts()) {
          the_post();
          $category = get_the_category();
          // Only display a post link once, even if it's in multiple categories
          if ($category[0]->cat_ID == $cat->cat_ID) {
            echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
          }
        }
        echo "</ul>";
        echo "</li>";
      }
      ?>
      </ul>
      </div>
     <div class="col-sm-4">
      <?php get_sidebar( 'blog' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

