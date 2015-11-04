<?php

function chromefix_inline_css() {
	wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}

function conditional_scripts() {
  if (is_page('namehere')) {

    wp_register_script('namehere', get_template_directory_uri() . '/pathhere/filename.min.js', array('jquery'), '2.0.1');
    wp_enqueue_script('namehere');

  }
}

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
               return true;   // we're at the page or at a sub page
	else
               return false;  // we're elsewhere
};

// Actions
add_action('admin_enqueue_scripts', 'chromefix_inline_css');
add_action('wp_print_scripts', 'conditional_scripts');

// Filters
add_filter('show_admin_bar', '__return_false');
