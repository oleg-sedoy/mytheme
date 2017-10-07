<?php get_header(); ?> 
<section>
	<h1><?php single_cat_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('loop'); ?>
	<?php endwhile; 
	else: echo '<h2>Нет записей.</h2>'; endif; ?>	 
	<?php pagination(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>