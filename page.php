<?php get_header(); ?>
<?php
if (is_page('address')) {
	get_template_part('template-parts/page/content' , 'address');
} elseif (is_page('price')){
	get_template_part('template-parts/page/content' , 'sale');
} else {
	get_template_part('template-parts/page/content' , 'default');
}
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>