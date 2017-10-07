<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title><?php dynamictitles(); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<?php $args = array( 
			'theme_location' => 'top', 
			'container'=> 'nav', 
			'menu_class' => 'bottom-menu', 
			'menu_id' => 'bottom-nav',
			);
		wp_nav_menu($args); 
		?>
	</header>
