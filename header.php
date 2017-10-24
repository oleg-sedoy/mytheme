<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- Set character encoding for the document -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Viewport for responsive web design -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Instruct Internet Explorer to use its latest rendering engine -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- PageTitle less than 65 characters -->
	<title><?php bloginfo('name'); ?></title>
	<!-- Description of the page less than 150 characters -->
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- Favicon All Size -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/custom-icon.png">
	<!-- Include wp_head -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="mySidenav" class="mmenu">
		<div class="mmenu__wrapper">
			<a class="mmenu__clouse" href="javascript:void(0)" onclick="closeNav()">&times;</a>
			<a class="mmenu__item" href="#" onclick="closeNav()">About</a>
			<a class="mmenu__item" href="#" onclick="closeNav()">Services</a>
			<a class="mmenu__item" href="#" onclick="closeNav()">Clients</a>
			<a class="mmenu__item" href="#" onclick="closeNav()">Contact</a>
		</div>
	</div>
	<header>
		<?php $args = array( 
			'theme_location' => 'top', 
			'container'=> 'nav', 
			'menu_class' => 'top-menu', 
			'menu_id' => 'top-nav',
		);
		wp_nav_menu($args); 
		?>
	</header>
