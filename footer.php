<footer>
  <section class="container footer-bottom">
    <hr>
    <div class="row">
      <div class="col-sm-4">
        <p class="btn">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
      </div>
      <div class="col-sm-8">
        <?php
          $args = array(
            'menu' => 'footer menu',
            'menu_class' => 'nav nav-pills pull-right',
            'container' => 'false',
          );
          wp_nav_menu($args);
          ?>
        </div>
      </div>
    </row>
  </section>
</footer>
<br>
</div><!-- /.container -->
<?php wp_footer(); ?>
</body>
</html>
