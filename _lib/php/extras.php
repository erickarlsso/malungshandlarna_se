<?php

function chromefix_inline_css() {
	wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}
add_action('admin_enqueue_scripts', 'chromefix_inline_css');

// filters
add_filter('show_admin_bar', '__return_false');
