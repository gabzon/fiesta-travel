<?php
namespace Agency\PostType\Testimonial;

function setup_custom_post() {

    $labels = array(
        'name' => __('Testimonials', 'sage'),
        'singular_name' => __('Testimonial', 'sage'),
        'menu_name' => __('Testimonials', 'sage'),
        'parent_item_colon' => __('Parent Testimonial:', 'sage'),
        'all_items' => __('All Testimonials', 'sage'),
        'view_item' => __('View Testimonial', 'sage'),
        'add_new_item' => __('Add New Testimonial', 'sage'),
        'add_new' => __('Add New', 'sage'),
        'edit_item' => __('Edit Testimonial', 'sage'),
        'update_item' => __('Update Testimonial', 'sage'),
        'search_items' => __('Search Testimonial', 'sage'),
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
        'menu_position' => 13,
        'menu_icon' => 'dashicons-format-quote',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    register_post_type('testimonial', $args);

}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');