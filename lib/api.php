<?php
//https://css-tricks.com/using-the-wp-api-to-fetch-posts/
function post_remove_extra_data( $data, $post, $context ) {
    // We only want to modify the 'view' context, for reading posts
    if ( $context !== 'view' || is_wp_error( $data ) ) {
        return $data;
    }

    // Here, we unset any data we don't want to see on the front end:
    unset( $data['author'] );
    unset( $data['parent'] );
    unset( $data['menu_order'] );
    unset( $data['modified_tz'] );
    unset( $data['modified'] );
    unset( $data['format'] );
    unset( $data['comment_status'] );
    unset( $data['modified_gmt'] );
    unset( $data['date_gmt'] );
    unset( $data['sticky'] );
    unset( $data['date_tz'] );
    unset( $data['ping_status'] );
    // continue unsetting whatever other fields you want

    return $data;
}

add_filter( 'json_prepare_post', 'post_remove_extra_data', 12, 3 );

function post_add_custom_meta_to_posts( $data, $post, $context ) {
    // We only want to modify the 'view' context, for reading posts
    if ( $context !== 'view' || is_wp_error( $data ) ) {
        return $data;
    }

    $product_price            = get_post_meta( $post['ID'], 'product_price', true );
    $product_gallery          = get_post_meta( $post['ID'], 'product_gallery', true );
    $product_included         = get_post_meta( $post['ID'], 'product_included', true );
    $product_not_included     = get_post_meta( $post['ID'], 'product_not_included', true );
    $product_cancelation      = get_post_meta( $post['ID'], 'product_cancelation', true );
    $product_payment          = get_post_meta( $post['ID'], 'product_payment', true );
    $product_aditional_info   = get_post_meta( $post['ID'], 'product_aditional_info', true );
    $product_flights          = get_post_meta( $post['ID'], 'product_flights', true );
    $product_hosting          = get_post_meta( $post['ID'], 'product_hosting', true );
    $product_slogan           = get_post_meta( $post['ID'], 'product_slogan', true );
    $product_number_days      = get_post_meta( $post['ID'], 'product_number_days', true );

    $data['product_info'] = array(
        'product_price'             => $product_price,
        'product_gallery'           => $product_gallery,
        'product_included'          => $product_included,
        'product_not_included'      => $product_not_included,
        'product_cancelation'       => $product_cancelation,
        'product_payment'           => $product_payment,
        'product_aditional_info'    => $product_aditional_info,
        'product_flights'           => $product_flights,
        'product_hosting'           => $product_hosting,
        'product_slogan'            => $product_slogan,
        'product_number_days'       => $product_number_days
    );

    return $data;
}

add_filter( 'json_prepare_post', 'post_add_custom_meta_to_posts', 10, 3 );
