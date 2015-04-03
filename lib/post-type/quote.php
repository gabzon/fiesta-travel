<?php
namespace Agency\PostType\Quote;

function setup_custom_post() {

    $labels = array(
        'name' => 'Quotes',
        'singular_name' => 'Quote',
        'menu_name' => 'Quotes',
        'parent_item_colon' => 'Parent Quote:',
        'all_items' => 'All Quotes',
        'view_item' => 'View Quote',
        'add_new_item' => 'Add New Quote',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Quote',
        'update_item' => 'Update Quote',
        'search_items' => 'Search Quote',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 14,
        'menu_icon' => 'dashicons-book',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('quote', $args);
}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');