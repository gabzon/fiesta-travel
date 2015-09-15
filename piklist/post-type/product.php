<?php
namespace Agency\PostType\Product;

function setup_custom_post() {

    $labels = array(
        'name' => __('Products', 'sage'),
        'singular_name' => __('Product', 'sage'),
        'menu_name' => __('Products', 'sage'),
        'parent_item_colon' => __('Parent Item:', 'sage'),
        'all_items' => __('All Products', 'sage'),
        'view_item' => __('View Product', 'sage'),
        'add_new_item' => __('Add New Product', 'sage'),
        'add_new' => __('Add New', 'sage'),
        'edit_item' => __('Edit Product', 'sage'),
        'update_item' => __('Update Product', 'sage'),
        'search_items' => __('Search Product', 'sage'),
        'not_found' => __('Not found', 'sage'),
        'not_found_in_trash' => __('Not found in Trash', 'sage'),
    );

    $args = array(
        'label'                 => 'product',
        'description'           => 'Products',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'comments', 'excerpt'),
        'taxonomies'            => array( ' product_type' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-products',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type('product', $args);

}
add_action('init', __NAMESPACE__ . '\\setup_custom_post');
