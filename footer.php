    <footer class="footer--wrap">
      <div class="container">

        <article class="col-xs-12 col-sm-3">
          <?php
          if (has_nav_menu('header_primary')) :
            echo '<h5>Länkar</h5>';
            wp_nav_menu([
              'theme_location'  => 'header_primary',
              'container'       => 'false',
              'menu_class'      => 'nav',
              'depth'           =>  1
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
              'menu_class'      => 'nav',
              'depth'           =>  1
            ]);
          endif;
          ?>
        </article>

        <article class="col-xs-12 col-sm-3">
          <?php
          if (has_nav_menu('footer_other')) :
            echo '<h5>Övrigt</h5>';
            wp_nav_menu([
              'theme_location'  => 'footer_other',
              'container'       => 'false',
              'menu_class'      => 'nav',
              'depth'           =>  1
            ]);
          endif;
          ?>
        </article>

      </div>
    </footer>

    <?php wp_footer(); ?>

    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-43683538-1','auto');ga('send','pageview');
    </script>

  </body>
</html>
