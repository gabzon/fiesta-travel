<?php
namespace Agency\PostType\Hotel;

function setup_custom_post() {

    $labels = array(
        'name' => __('Hotels', 'sage'),
        'singular_name' => __('Hotel', 'sage'),
        'menu_name' => __('Hotels', 'sage'),
        'parent_item_colon' => __('Parent Hotel:', 'sage'),
        'all_items' => __('All Hotels', 'sage'),
        'view_item' => __('View Hotel', 'sage'),
        'add_new_item' => __('Add New Hotel', 'sage'),
        'add_new' => __('Add New', 'sage'),
        'edit_item' => __('Edit Hotel', 'sage'),
        'update_item' => __('Update Hotel', 'sage'),
        'search_items' => __('Search Hotel', 'sage'),
        'not_found' => __('Not found', 'sage'),
        'not_found_in_trash' => __('Not found in Trash', 'sage'),
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
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
