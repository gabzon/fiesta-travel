<?php
namespace Agency\PostType\Product;

function setup_custom_post() {

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

}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');