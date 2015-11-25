<?php

if ( ! isset( $content_width ) ) {
	$content_width = 767;
}

if ( ! function_exists( 'theme_setup' ) ) :

  function theme_setup() {
  	load_theme_textdomain( 'malungshandlarna', get_template_directory() . '/lang' );

  	add_theme_support( 'post-thumbnails' );

		add_image_size('gallerycover', 1200, 400, array( 'center', 'center' ));
		add_image_size('storecover', 1170, 658, array( 'center', 'center' ));
	  add_image_size('background', 1500, 1125, array( 'center', 'center' ));

  	register_nav_menus( array(
  		'header_primary'   => __( 'Huvudmeny',   'malungshandlarna' ),
			'footer_partners' => __( 'Partners', 'malungshandlarna' )
  	) );

  }
endif;

if (function_exists('register_sidebar')) :
  // Define Sidebar Widget Area
  register_sidebar(array(
    'name' => __('Widget Area', 'malungshandlarna'),
    'description' => __('Välj ut vilka widgets som ska finnas i sidomenyn', 'salensommar'),
    'id' => 'widget-area',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget--title"><h5>',
    'after_title' => '</h5></div>'
  ));
endif;

add_action( 'after_setup_theme', 'theme_setup' );
