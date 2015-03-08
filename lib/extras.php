<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    // Add class if sidebar is active
    if (Config\display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Change user roles names
 */
function setup_user_roles() {
    global $wp_roles;

    if (!isset($wp_roles))
        $wp_roles = new WP_Roles();

    $roles = array(
        'subscriber' => __('Customer'),
        'editor' => __('Agent'),
        'administrator' => __('Manager')
    );

    foreach ($roles as $role => $name) {
        $wp_roles->roles[$role]['name'] = $name;
        $wp_roles->role_names[$role] = $name;
    }
}
add_action('init', __NAMESPACE__ . '\\setup_user_roles');

/**
 * Setup Custom Posts
 */
function setup_custom_posts() {

    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'menu_name' => 'Products',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Products',
        'view_item' => 'View Product',
        'add_new_item' => 'Add New Product',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Product',
        'update_item' => 'Update Product',
        'search_items' => 'Search Product',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
    );
    $args = array(
        'label' => 'product',
        'description' => 'Products',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'comments',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-products',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('product', $args);

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
        'supports' => array('title', 'thumbnail',),
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

    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'menu_name' => 'Testimonials',
        'parent_item_colon' => 'Parent Testimonial:',
        'all_items' => 'All Testimonials',
        'view_item' => 'View Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Testimonial',
        'update_item' => 'Update Testimonial',
        'search_items' => 'Search Testimonial',
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
        'menu_position' => 13,
        'menu_icon' => 'dashicons-awards',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('testimonial', $args);

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
add_action('init', __NAMESPACE__ . '\\setup_custom_posts');

/**
 * Setup Custom Taxonomies
 */
function setup_custom_taxonomies() {
    $labels = array(
        'name' => 'Locations',
        'singular_name' => 'Location',
        'menu_name' => 'Location',
        'all_items' => 'All Locations',
        'parent_item' => 'Location',
        'parent_item_colon' => 'Location:',
        'new_item_name' => 'New Location Name',
        'add_new_item' => 'Add new Location',
        'edit_item' => 'Edit Location',
        'update_item' => 'Update Location',
        'separate_items_with_commas' => 'Separate locations with commas',
        'search_items' => 'Search Locations',
        'add_or_remove_items' => 'Add or remove Locations',
        'choose_from_most_used' => 'Choose from the most used locations',
        'not_found' => 'Not Found',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('location', array('product'), $args);

    $labels = array(
        'name' => 'Themes',
        'singular_name' => 'Theme',
        'menu_name' => 'Theme',
        'all_items' => 'All Themes',
        'parent_item' => 'Parent Theme',
        'parent_item_colon' => 'Parent Theme:',
        'new_item_name' => 'New Theme Name',
        'add_new_item' => 'Add New Theme',
        'edit_item' => 'Edit Theme',
        'update_item' => 'Update Theme',
        'separate_items_with_commas' => 'Separate themes with commas',
        'search_items' => 'Search Themes',
        'add_or_remove_items' => 'Add or remove themes',
        'choose_from_most_used' => 'Choose from the most used themes',
        'not_found' => 'Not Found',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('theme', array('product'), $args);
}
add_action('init', __NAMESPACE__ . '\\setup_custom_taxonomies');

function piklist_checker() {
    if (is_admin()) {
        include_once(get_template_directory() . '/piklist/piklist-checker.php');

        if (!\piklist_checker::check(__FILE__, 'theme')) {
            return;
        }
    }
}
add_action('init', __NAMESPACE__ . '\\piklist_checker');

function check_valid_number($validation_rules) {
    $validation_rules['number'] = array(
        'rule' => "/[-+]?[0-9]*[.,]?[0-9]+/",
        'message' => __('is not a number')
    );

    return $validation_rules;
}
add_filter('piklist_validation_rules', __NAMESPACE__ . '\\check_valid_number', 11);