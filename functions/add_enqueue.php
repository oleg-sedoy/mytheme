<?php 

/**
 *
 * Подключение файла стиля и скрипта
 *
 */
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.min.js', array(), '1.0.0', true );
}
?>
