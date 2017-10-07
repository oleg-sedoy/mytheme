<div class="container">
	<div class="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1 class="content__head"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; ?>
	</div>
</div>