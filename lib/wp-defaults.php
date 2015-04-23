<?php
// ----------------------------------------------------------------------------
// Wordpress Defaults
// 1. SVG
// 2. Images
// -----------------------------------------------------------------------------

/**
 * Accept svg files
 * https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/
 * http://www.wpcontent.co.uk/2014/09/enabling-and-using-svg-in-wordpress/
 * https://www.leighton.com/blog/enable-upload-of-svg-to-wordpress-media-library
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function custom_image_theme_setup() {
    add_theme_support('post-thumbnails');
    if(false === get_option("thumbnail_crop")) {
        add_option('thumbnail_crop', '0');
    } else {
        update_option('thumbnail_crop', '0');
    }
    add_image_size('small', 300 ); // 300 pixels wide (and unlimited height)
    add_image_size('medium', 640);
    add_image_size('large', 980);
    add_image_size('wide-gallery', 900, 350);
    add_image_size('agency-promotion', 400, 250, true);

    update_option('medium_size_w', 640,'0');
    update_option('large_size_w', 900,'0');
}
add_action( 'after_setup_theme', 'custom_image_theme_setup' );
