<footer class="footer-wrapper">

  <section class="footer--secondary">
    <div class="container">

    </div>
  </section>

  <section class="footer--primary">
    <div class="container">

      <article class="col-xs-12 col-sm-3">
        <?php
        if (has_nav_menu('header_primary')) :
          echo '<h5>Länkar</h5>';
          wp_nav_menu([
            'theme_location'  => 'header_primary',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>
      </article>

      <figure class="col-xs-12 col-sm-3">
        <a href="<?php esc_url(home_url('/')); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/huvudlogga-vit_sv.png">
        </a>
        <p>&copy; <?php echo bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </figure>


    </div>
  </section>

</footer>
