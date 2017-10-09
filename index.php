<?php get_header(); ?> 
<h1>Olegmes50</h1>
<p onclick="openNav()">Меню</p>
<picture>
<source srcset="wp-content/themes/mytheme/img/IMG_1716-320.jpg" media="(max-width: 320px)">
<source srcset="wp-content/themes/mytheme/img/IMG_1716-480.jpg" media="(max-width: 480px)">
<source srcset="wp-content/themes/mytheme/img/IMG_1716-768.jpg" media="(max-width: 768px)">
<img srcset="wp-content/themes/mytheme/img/IMG_1716-960.jpg">
</picture>
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('loop'); ?>
	<?php endwhile;
	else: echo '<h2>Нет записей.</h2>'; endif; ?>	 
	<?php pagination(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer();
?>