<?php
namespace Agency\Taxonomie\City;

function setup_custom_taxonomie() {

    $labels = array(
        'name' => 'Places',
        'singular_name' => 'Place',
        'menu_name' => 'Places',
        'all_items' => 'All Places',
        'parent_item' => 'Parent Place',
        'parent_item_colon' => 'Parent Place:',
        'new_item_name' => 'New place name',
        'add_new_item' => 'Add new place',
        'edit_item' => 'Edit place',
        'update_item' => 'Update place',
        'separate_items_with_commas' => 'Separate places with commas',
        'search_items' => 'Search Places',
        'add_or_remove_items' => 'Add or remove places',
        'choose_from_most_used' => 'Choose from the most used places',
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

    register_taxonomy('place', array('product'), $args);

}
add_action('init', __NAMESPACE__ . '\\setup_custom_taxonomie');
