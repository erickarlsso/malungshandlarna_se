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

add_action( 'init', 'post_type_events' );

function post_type_events() {
    register_taxonomy_for_object_type('category', 'arrangemang');
    register_taxonomy_for_object_type('post_tag', 'arrangemang');
    register_post_type('arrangemang',
        array(
        'labels' => array(
            'name' => __('Arrangemang', 'malungshandlarna'),
            'singular_name' => __('Arrangemang', 'malungshandlarna'),
            'add_new' => __('Skapa nytt', 'malungshandlarna'),
            'add_new_item' => __('Skapa nytt arrangemang', 'malungshandlarna'),
            'edit' => __('Redigera', 'malungshandlarna'),
            'edit_item' => __('Redigera arrangemang', 'malungshandlarna'),
            'new_item' => __('Skapa nytt arrangemang', 'malungshandlarna'),
            'view' => __('Visa', 'malungshandlarna'),
            'view_item' => __('Visa', 'malungshandlarna'),
            'search_items' => __('Sök arrangemang', 'malungshandlarna'),
            'not_found' => __('Inga arrangemang hittade', 'malungshandlarna'),
            'not_found_in_trash' => __('Inga arrangemang hittade i papperskorgen', 'malungshandlarna')
        ),
        'menu_icon' => 'dashicons-calendar-alt',
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
