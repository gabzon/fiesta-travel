<?php
namespace Agency\PostType\Quote;

function setup_custom_post() {

    $labels = array(
        'name' => __('Quotes', 'sage'),
        'singular_name' => __('Quote', 'sage'),
        'menu_name' => __('Quotes', 'sage'),
        'parent_item_colon' => __('Parent Quote:', 'sage'),
        'all_items' => __('All Quotes', 'sage'),
        'view_item' => __('View Quote', 'sage'),
        'add_new_item' => __('Add New Quote', 'sage'),
        'add_new' => __('Add New', 'sage'),
        'edit_item' => __('Edit Quote', 'sage'),
        'update_item' => __('Update Quote', 'sage'),
        'search_items' => __('Search Quote', 'sage'),
        'not_found' => __('Not found', 'sage'),
        'not_found_in_trash' => __('Not found in Trash', 'sage'),
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