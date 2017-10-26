<?php get_header(); ?> 
<h1>Olegmes50 - MyTemplate for WP</h1>
<p onclick="openNav()">Мобильное меню</p>
<picture>
<source srcset="<?php echo get_template_directory_uri(); ?>/img/IMG_1716-320.jpg" media="(max-width: 320px)">
<source srcset="<?php echo get_template_directory_uri(); ?>/img/IMG_1716-480.jpg" media="(max-width: 480px)">
<source srcset="<?php echo get_template_directory_uri(); ?>/img/IMG_1716-768.jpg" media="(max-width: 768px)">
<source srcset="<?php echo get_template_directory_uri(); ?>/img/IMG_1716-992.jpg" media="(max-width: 992px)">
<img srcset="<?php echo get_template_directory_uri(); ?>/img/IMG_1716-1200.jpg">
</picture>
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('loop'); ?>
	<?php endwhile;
	else: echo '<h2>Нет записей.</h2>'; endif; ?>	 
</section>
<?php get_footer(); ?>