<?php
namespace Agency\PostType\Hotel;

function setup_custom_post() {

    $labels = array(
        'name' => 'Hotels',
        'singular_name' => 'Hotel',
        'menu_name' => 'Hotels',
        'parent_item_colon' => 'Parent Hotel:',
        'all_items' => 'All Hotels',
        'view_item' => 'View Hotel',
        'add_new_item' => 'Add New Hotel',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Hotel',
        'update_item' => 'Update Hotel',
        'search_items' => 'Search Hotel',
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
        'menu_position' => 11,
        'menu_icon' => 'dashicons-building',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('hotel', $args);

}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');