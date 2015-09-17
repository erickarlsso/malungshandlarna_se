<!doctype html>
<html class="no-js" lang="<?php bloginfo( 'language' ); ?>" prefix="og: http://ogp.me/ns#">

  <?php get_template_part('_parts/site', 'head'); ?>

  <body>

    <?php get_template_part('_parts/site', 'header'); ?>

      <?php
      if( is_front_page() ) :
        get_template_part('_parts/template', 'front');
      endif;
      ?>
      <?php get_template_part('_parts/site', 'footer'); ?>

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
