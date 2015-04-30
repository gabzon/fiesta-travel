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

function agency_restrict_manage_posts() {
    global $typenow;
    if( $typenow != "page" && $typenow != "post" ){
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
            echo "<option value=''>".__('Show All')." $tax_name</option>";
            foreach ($terms as $term) { echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; }
            echo "</select>";
        }
    }
}
add_action( 'restrict_manage_posts', __NAMESPACE__ . '\\agency_restrict_manage_posts' );

function agency_setting_pages($pages) {
    $pages[] = array(
        'page_title' => __('Settings'),
        'menu_title' => __('Settings'),
        'sub_menu' => 'themes.php', //Under Appearance menu
        'capability' => 'manage_options',
        'menu_slug' => 'agency_settings',
        'setting' => 'agency_settings',
        'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png'),
        'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png'),
        'single_line' => false,
        'default_tab' => 'Agency Information',
        'save_text' => __('Save Settings')
    );

    return $pages;
}
add_filter('piklist_admin_pages', __NAMESPACE__ . '\\agency_setting_pages');

function new_excerpt_more( $excerpt ) {
    return '';
}

add_filter( 'excerpt_more', __NAMESPACE__ . '\\new_excerpt_more' );

add_action( 'wp_ajax_nopriv_request-submit', __NAMESPACE__ . '\\request_submit');
add_action( 'wp_ajax_request-submit', __NAMESPACE__ . '\\request_submit');

function request_submit(){
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $data = $_POST;
    $info = 'Destination: '.$data['destination'].'<br/>'
        .'Departure Date: '.$data['departure'].'<br/>'
        .'Return Date: '.$data['return'].'<br/>'
        .'Adults: '.$data['adults'].'<br/>'
        .'Kids: '.$data['kids'].'<br/>';

    $info .= 'Type of travel: <br/><ul style="margin: 0; padding: 0;">';
    foreach($data['travel'] as $travel){
        $info .= '<li>'.ucwords($travel).'</li>';
    }
    $info.= '</ul>';

    $info .= 'Preferences: '.$data['preferences'];

    $admin_email = get_option( 'admin_email' );

    wp_mail( $admin_email, __('New Request', 'sage'), $info, $headers);
    exit;
}
