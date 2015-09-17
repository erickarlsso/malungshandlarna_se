<footer class="footer-wrapper">

  <section class="footer--secondary">
    <div class="container">

      <article class="col-xs-12 col-sm-offset-4 col-sm-4">
        <div class="fb-like" data-href="https://facebook.com/malungshandlarna" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
      </article>

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

      <article class="col-xs-12 col-sm-3">
        <?php
        if (has_nav_menu('footer_other')) :
          echo '<h5>Partners</h5>';
          wp_nav_menu([
            'theme_location'  => 'footer_other',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>
      </article>

      <article class="col-xs-12 col-sm-3">

        <a href="http://visitmalungsalen.com" target="_blank">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/visitmalungsalen_logo.png">
        </a>

      </article>


    </div>
  </section>

</footer>
