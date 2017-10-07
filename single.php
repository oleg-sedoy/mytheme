<?php get_header(); ?>
<?php
if ($post_type == 'point') {
	get_template_part('template-parts/post/content' , 'point');
} elseif ($post_type == 'rent') {
	get_template_part('template-parts/post/content' , 'rent');
} else {
	get_template_part('template-parts/post/content' , 'default');
}
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
