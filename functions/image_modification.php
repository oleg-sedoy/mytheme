<?php 

/**
 *
 * Автоматический src set for img tag
 *
 */
function image_tag($html, $id, $alt, $title) {
	return preg_replace(array(
			'/'.str_replace('//','//',get_bloginfo('url')).'/i',
			'/s+width="d+"/i',
			'/s+height="d+"/i',
			'/alt=""/i'
		),
		array(
			'',
			'',
			'',
			'alt="' . $title . '"'
		),
		$html);
}
add_filter('get_image_tag', 'image_tag', 0, 4);
?>