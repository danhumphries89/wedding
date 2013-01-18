<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title> <?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?> </title>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fonts.css" rel="stylesheet" type="text/css" screen="all" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/base.css" rel="stylesheet" type="text/css" screen="all" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" screen="all" />

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js" type="text/javascript" ></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_8SEqSNrM57GFyBHyHMUuikUh3XEkQeU&sensor=false"></script>
</head>
<body>
	<header class="main_header">
		<h1 class="title"> 
			<a href="localhost:8888/aquafeatures/" title="<?php bloginfo( 'name' ); ?>">
				<span><?php bloginfo('name'); ?></span>
			</a>
		</h1>
		<h2 class="bloginfo">
			<span><?php bloginfo('description'); ?></span>
		</h2>
	</header>

	<nav class="main_nav">
		<?php wp_nav_menu( array('menu' => 'mainmenu' )); ?>
	</nav>