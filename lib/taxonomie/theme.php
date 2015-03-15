<?php
namespace Agency\Taxonomie\Theme;

function setup_custom_taxonomie() {

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
add_action('init', __NAMESPACE__ . '\\setup_custom_taxonomie');