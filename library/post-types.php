<?php

add_action( 'init', 'post_type_members' );

function post_type_members() {
  register_taxonomy_for_object_type('category', 'medlemmar');
  register_taxonomy_for_object_type('post_tag', 'medlemmar');
  register_post_type('medlemmar',
    array(
    'labels' => array(
      'name' => __('Medlemmar', 'malungshandlarna'),
      'singular_name' => __('Medlem', 'malungshandlarna'),
      'add_new' => __('Skapa ny', 'malungshandlarna'),
      'add_new_item' => __('Skapa ny medlem', 'malungshandlarna'),
      'edit' => __('Redigera', 'malungshandlarna'),
      'edit_item' => __('Redigera medlem', 'malungshandlarna'),
      'new_item' => __('Skapa ny medlem', 'malungshandlarna'),
      'view' => __('Visa', 'malungshandlarna'),
      'view_item' => __('Visa', 'malungshandlarna'),
      'search_items' => __('Sök medlem', 'malungshandlarna'),
      'not_found' => __('Inga medlemmar hittade', 'malungshandlarna'),
      'not_found_in_trash' => __('Inga medlemmar hittade i papperskorgen', 'malungshandlarna')
    ),
    'menu_icon' => 'dashicons-groups',
    'public' => true,
    'hierarchical' => true,
    'has_archive' => false,
    'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
    ),
    'can_export' => true,
    'taxonomies' => array(
        'category'
    )
  ));
}
