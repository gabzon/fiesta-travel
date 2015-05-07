<?php
namespace Agency\PostType\Country;

function setup_custom_post() {

    $labels = array(
        'name' => __('Countries','sage'),
        'singular_name' => __('Country','sage'),
        'menu_name' => __('Countries','sage'),
        'parent_item_colon' => __('Parent Country:','sage'),
        'all_items' => __('All Countries','sage'),
        'view_item' => __('View Country','sage'),
        'add_new_item' => __('Add New Country','sage'),
        'add_new' => __('Add New','sage'),
        'edit_item' => __('Edit Country','sage'),
        'update_item' => __('Update Country','sage'),
        'search_items' => __('Search Country','sage'),
        'not_found' => __('Not found', 'sage'),
        'not_found_in_trash' => __('Not found in Trash', 'sage'),
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'thumbnail','editor','excerpt'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 12,
        'menu_icon' => 'dashicons-admin-site',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('country', $args);

}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');
