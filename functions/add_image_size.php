<?php 
/**
 * add new_image_size
 *
 */

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'image_inner_320', 320, 9999, false);
    add_image_size( 'image_inner_480', 480, 9999, false);
    add_image_size( 'image_inner_768', 768, 9999, false);
    add_image_size( 'image_inner_992', 992, 9999, false);
    add_image_size( 'image_inner_1200', 1200, 9999, false);
}

function adjust_image_sizes_attr( $sizes, $size ) {
   $sizes = '(max-width: 320px) 60vw, (max-width: 480px) 55vw, (max-width: 768px) 50vw, (max-width: 992px) 92vw, (max-width: 1200px) 100vw, 1200px';
   return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );