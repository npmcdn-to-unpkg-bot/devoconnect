<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
	<?php include('partials/favicons.php');?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container">
          <a class="header-logo" href="<?php bloginfo('url'); ?>">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-header.png"
              alt="<?php bloginfo('description'); ?>"
              width="210"
              height="auto"
            />
          </a>
      </div>
      <div class="navbar-wrapper">
          <nav class="navbar">
            <div class="container">
              <div class="navbar-header">
                <h4 class="visible-xs-block text-center"><?php _e('Toggle Navigation', 'DevoConnect'); ?></h4>
                <button type="button" class="navbar-toggle visible-xs-block collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                  <span class="sr-only">navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <nav id="navbar" class="navbar-collapse collapse" role="navigation">
                  <?php
                    $args = array(
                      'theme_location' => 'header',
                      'menu' => 'Header Menu', // make sure your menu is named identically
                      'menu_class' => '',
                      'container' => 'false',
                      'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
                    );
                    wp_nav_menu($args);
                    ?>
                </nav>
              </div>
            </div>
          </nav>
        </div>
      </div>
	  <a href="<?php bloginfo('url'); ?>/gmc/" class="gmc-link">
      	<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-gmc-white.png" alt="Gill Morris Communication" class="gmc-img" />
		<div class="gmc-tooltip transition-quarter">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-gmccomms-white.png" alt="Gill Morris Communication" />
		</div>
	  </a>
    </header>
	<div class="content" role="main">