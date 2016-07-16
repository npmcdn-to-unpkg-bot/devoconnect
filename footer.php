</div><!-- content -->
<footer>
  <div class="container footer-bottom">
    <hr>
	
	<?php if (is_page_template( 'page-gmc.php' )) { ?>
		<div class="text-center">
			<p class="btn">&copy; <?php echo date("Y"); ?> Gill Morris Communications</p>
		</div>		  
	<?php } else { ?>
	
		<div class="row">
		  <div class="col-sm-4">
			<p class="btn">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
		  </div>
		  <div class="col-sm-8">
			<?php
			  $args = array(
				'menu' => 'footer menu',
				'menu_class' => 'nav nav-pills',
				'container' => 'false',
			  );
			  wp_nav_menu($args);
			  ?>
			</div>
		  </div>
		
	<?php } ?>
		
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>