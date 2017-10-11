<?php 

/**
 *
 * Отключние embed, скрипт позволяет пользователям вставлять содержимое из других сайтов — таких,
 * как видео YouTube, твитов и сообщений из сайтов WordPress. Например, если вы хотите,
 * встроить видео с YouTube в вашем посте, нужно просто поместить URL страницы видео в пост WordPress,
 * он сделает все остальное.
 *
 */
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
