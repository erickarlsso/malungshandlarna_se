<?php

function conditional_scripts() {
  if (is_page('home')) {

    wp_register_script('instagram', get_template_directory_uri() . '/_lib/js/vendor/pongstagr.am.min.js', array('jquery'), '3.0.4');
    wp_enqueue_script('instagram');

  }
}

// Actions
add_action('wp_print_scripts', 'conditional_scripts');
