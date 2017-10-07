<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
		<h1><?php the_title(); ?></h1>
		<div class="meta">
			<p>Опубликовано: <?php the_time('F j, Y'); ?> в <?php the_time('g:i a'); ?></p>
			<p>Категории: <?php the_category(',') ?></p> 
			<?php the_tags('<p>Тэги: ', ',', '</p>'); ?>
		</div>
		<?php the_content(); ?>
	</article>
<?php endwhile;  ?>
<?php previous_post_link('%link', '<- Предыдущий пост: %title', TRUE); ?> 
<?php next_post_link('%link', 'Следующий пост: %title ->', TRUE); ?> 
<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
</section>