<?php

if ( ! isset( $content_width ) ) {
	$content_width = 767;
}

if ( ! function_exists( 'theme_setup' ) ) :

  function theme_setup() {
  	load_theme_textdomain( 'malungshandlarna', get_template_directory() . '/languages' );

  	add_theme_support( 'automatic-feed-links' );
  	add_theme_support( 'title-tag' );
  	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );

    set_post_thumbnail_size( 825, 510, true );

  	register_nav_menus( array(
  		'header_primary'   => __( 'Huvudmeny',   'malungshandlarna' ),
			'footer_partners' => __( 'Partners', 'malungshandlarna' ),
			'footer_other' => __( 'Övrigt', 'malungshandlarna' )
  	) );

  }
endif;

add_action( 'after_setup_theme', 'theme_setup' );