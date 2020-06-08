<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goliath-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/src/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/src/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/src/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/src/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/src/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/src/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/src/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php include "GLOBALS.php" // Global variables ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!-- preloader -->
	<div class="preload">
		<object data="<?php bloginfo('template_url') ?>/src/img/preloader.svg" type="image/svg+xml"></object>
	</div>

	<navbar>
		<div class="container">
			<div class="navbar">
				<a href="<?=get_home_url(null, '')?>" class="logo">
					<img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="logo" class="logo-img">
					<img src="<?php bloginfo('template_url') ?>/src/img/logo-text.svg" alt="logo-text" class="logo-text">
				</a>

				<div class="mobile-langs">
					<?php get_template_part('template-parts/part-langs'); ?>
				</div>

				<?php
				wp_nav_menu(
					array(
						'menu' => 'Main menu',
						'container' => false, 
					)
				);
				?>

				<div class="info-block">
					<a href="tel:<?=PHONE_HREF?>" class="phone"><?=PHONE?></a>

					<?php get_template_part('template-parts/part-langs'); ?>
				</div>

				<button class="menu-icon"><span></span></button>
			</div>
			<!-- /.navbar -->
		</div>
		<!-- /.container -->
	</navbar>