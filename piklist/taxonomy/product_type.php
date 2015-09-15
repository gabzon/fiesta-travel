<?php

namespace Agency\Taxonomie\Product_Type;

// Register Custom Taxonomy
function setup_custom_taxonomie() {

    $labels = array(
        'name'                       => _x( 'Product types', 'Taxonomy General Name', 'sage' ),
        'singular_name'              => _x( 'Product type', 'Taxonomy Singular Name', 'sage' ),
        'menu_name'                  => __( 'Type', 'sage' ),
        'all_items'                  => __( 'All Types', 'sage' ),
        'parent_item'                => __( 'Parent Type', 'sage' ),
        'parent_item_colon'          => __( 'Parent Type:', 'sage' ),
        'new_item_name'              => __( 'New Type Name', 'sage' ),
        'add_new_item'               => __( 'Add New Type', 'sage' ),
        'edit_item'                  => __( 'Edit Type', 'sage' ),
        'update_item'                => __( 'Update Type', 'sage' ),
        'view_item'                  => __( 'View Type', 'sage' ),
        'separate_items_with_commas' => __( 'Separate types with commas', 'sage' ),
        'add_or_remove_items'        => __( 'Add or remove types', 'sage' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
        'popular_items'              => __( 'Popular types', 'sage' ),
        'search_items'               => __( 'Search types', 'sage' ),
        'not_found'                  => __( 'Not Found', 'sage' ),
    );
    $rewrite = array(
        'slug'                       => 'product_type',
        'with_front'                 => true,
        'hierarchical'               => false,
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

    register_taxonomy('product_type', array('product'), $args);

}
add_action('init', __NAMESPACE__ . '\\setup_custom_taxonomie');
