<?php
namespace Agency\PostType\Testimonial;

function setup_custom_post() {

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

}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');