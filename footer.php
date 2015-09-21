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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/js/vendor/bootstrap.min.js"></script>

    <?php wp_footer(); ?>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/js/main.js"></script>


    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

  </body>
</html>
