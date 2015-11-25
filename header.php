<!doctype html>
<html class="no-js" lang="<?php bloginfo( 'language' ); ?>" prefix="og: http://ogp.me/ns#">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php the_title(); ?> - Malungshandlarna</title>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/apple-touch-icon-152x152.png" />

    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/favicon-128.png" sizes="128x128" />

    <meta name="application-name" content="<?php bloginfo( 'name' ); ?>"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ico/mstile-310x310.png" />


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
