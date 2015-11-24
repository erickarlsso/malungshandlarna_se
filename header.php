<!doctype html>
<html class="no-js" lang="<?php bloginfo( 'language' ); ?>" prefix="og: http://ogp.me/ns#">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <header class="header--wrap navbar navbar-fixed-top">
      <div class="container">

        <a href="<?php echo get_site_url(); ?>" class="navbar--brand">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/huvudlogga-svart_sv.png">
        </a>

        <?php
        if (has_nav_menu('header_primary')) :
          wp_nav_menu([
            'theme_location'  => 'header_primary',
            'container'       => 'false',
            'menu_class'      => 'hidden-sm-down nav navbar--main',
          ]);
        endif;
        ?>

        <a href="#" class="navbar--toggle">
          <i class="hidden-sm-up fa--switch fa fa-bars fa-2x"></i>
        </a>

      </div>
    </header>

    <nav class="hidden-sm-up nav--wrap">
      <div class="container">

        <?php
        if (has_nav_menu('header_primary')) :
          wp_nav_menu([
            'theme_location'  => 'header_primary',
            'container'       => 'false',
            'menu_class'      => 'nav'
          ]);
        endif;
        ?>

      </div>
    </nav>
