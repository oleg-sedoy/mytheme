<?php

/**
 *
 * Удаление пунктов меню в админке для 
 * конкретного пользователя. Функция действует
 * для пользователя test
 *
 */
add_action( 'admin_menu', 'my_remove_menu_pages', 9999);
function my_remove_menu_pages() {

	$current_user = wp_get_current_user();	
	$user = $current_user->user_login;

	if($user == 'test') {
		remove_menu_page('themes.php');
		remove_menu_page('index.php');
		remove_menu_page('edit.php');
		remove_menu_page('upload.php');
		remove_menu_page('edit.php?post_type=page');
		remove_menu_page('edit.php?post_type=acf');
		remove_menu_page('edit-comments.php');
		remove_menu_page('plugins.php');
		remove_menu_page('wpcf7');
		remove_menu_page('sas-page');
		remove_menu_page('users.php');
		remove_menu_page('tools.php');
		remove_menu_page('wpide');
		remove_menu_page('backwpup');
		remove_menu_page('wpcsv-settings');
		remove_menu_page('options-general.php');
	}
}
?>