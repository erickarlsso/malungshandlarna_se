<header class="header-wrapper navbar navbar-fixed-top">
  <div class="container">

    <a href="<?php esc_url(home_url('/')); ?>" class="navbar--brand">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/huvudlogga-svart_sv.png">
    </a>

    <nav class="pull-right">
      <?php
      if (has_nav_menu('header_primary')) :
        wp_nav_menu([
          'theme_location'  => 'header_primary',
          'container'       => 'false',
          'menu_class'      => 'nav hidden-xs-down'
        ]);
      endif;
      ?>
    </nav>

  </div>
</header>
