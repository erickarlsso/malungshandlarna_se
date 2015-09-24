<!doctype html>
<html class="no-js" lang="<?php bloginfo( 'language' ); ?>" prefix="og: http://ogp.me/ns#">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/css/site.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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

    <header class="header--wrapper">
      <div class="container">

        <a href="<?php esc_url(home_url('/')); ?>" class="navbar--brand">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_lib/img/huvudlogga-svart_sv.png">
        </a>

        <?php
        if (has_nav_menu('header_primary')) :
          wp_nav_menu([
            'theme_location'  => 'header_primary',
            'container'       => 'false',
            'menu_class'      => 'nav navbar--main'
          ]);
        endif;
        ?>

        <a href="#" class="navbar--toggle">
          <i class="fa fa-bars"></i>
        </a>

      </div>
    </header>
