<?php
namespace Agency\Taxonomie\Location;

function setup_custom_taxonomie() {

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

}
add_action('init', __NAMESPACE__ . '\\setup_custom_taxonomie');
