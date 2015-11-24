<?php

// Default Scripts & Styles
function default_scripts_and_styles() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', false);
    wp_enqueue_script('jquery');

    wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array('jquery'), '2.8.3', false);
    wp_enqueue_script('modernizr');

    wp_register_script('googlemaps', '//maps.googleapis.com/maps/api/js?sensor=false', array('jquery'), '3.0.0', false);
    wp_enqueue_script('googlemaps');

    wp_register_script('combined', get_template_directory_uri() . '/dist/scripts/combined.js', array('jquery'), '2.0.1', true);
    wp_enqueue_script('combined');

    wp_register_style('site', get_template_directory_uri() . '/dist/styles/site.css', array(), '2.0.1');
    wp_enqueue_style('site');

  }
}

// Conditional Scripts & Styles
function conditional_scripts_and_styles() {

  if (is_page('pagenamehere')) {
    wp_register_script('pagenamehere', get_template_directory_uri() . '/path/to/js/script.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('pagenamehere');
  }

}

// Add Actions
add_action('init', 'default_scripts_and_styles');
add_action('init', 'conditional_scripts_and_styles');
