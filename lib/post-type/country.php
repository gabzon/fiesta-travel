<?php
namespace Agency\PostType\Country;

function setup_custom_post() {

    $labels = array(
        'name' => 'Countries',
        'singular_name' => 'Country',
        'menu_name' => 'Countries',
        'parent_item_colon' => 'Parent Country:',
        'all_items' => 'All Countries',
        'view_item' => 'View Country',
        'add_new_item' => 'Add New Country',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Country',
        'update_item' => 'Update Country',
        'search_items' => 'Search Country',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
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
