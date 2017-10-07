<?php 

/**
 *
 * Кастомный логотип при входе
 *
 */
function my_custom_login_logo(){
	echo '
	<style type="text/css">
		h1 a { background-image:url('.get_bloginfo('template_directory').'/img/favicon/apple-icon-72x72.png) !important; }
	</style>
	';
}
add_action('login_head', 'my_custom_login_logo');
?>