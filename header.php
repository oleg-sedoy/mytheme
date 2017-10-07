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
