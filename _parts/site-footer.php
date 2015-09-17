<footer class="footer-wrapper">

  <section class="footer--secondary">
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

      <article class="col-xs-12 col-sm-3">
        <?php
        if (has_nav_menu('header_secondary')) :
          echo '<h5>Verktyg</h5>';
          wp_nav_menu([
            'theme_location'  => 'header_secondary',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>
      </article>

      <article class="col-xs-12 col-sm-3">
        <?php
        if (has_nav_menu('footer_rules')) :
          echo '<h5>Regler & Villkor</h5>';
          wp_nav_menu([
            'theme_location'  => 'footer_rules',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>
      </article>

      <article class="col-xs-12 col-sm-3">
        <?php
        if (has_nav_menu('footer_partners')) :
          echo '<h5>Partners</h5>';
          wp_nav_menu([
            'theme_location'  => 'footer_partners',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>
      </article>

    </div>
  </section>

  <section class="footer--primary">
    <div class="container">

      <figure class="col-xs-12 col-sm-offset-4 col-sm-4">
        <a href="<?php esc_url(home_url('/')); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/huvudlogga_vit_sv.png">
        </a>
        <p>&copy; <?php echo bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </figure>


    </div>
  </section>

</footer>
