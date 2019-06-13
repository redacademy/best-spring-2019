<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="/path/to/flickity.css" media="screen">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<div class="site-branding site-title screen-reader-text">
				<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<div class="hamburger-menu">
					<div></div>
					<div></div>
					<div></div>
				</div>

				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
			</nav><!-- navigation -->

			<div class="best-header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/Assets/vector-icons/best-logo/Best-v1-white.svg" alt="">
			</div><!-- heder-logo -->

			<div class="search-form">
				<?php get_search_form(); ?>
			</div><!-- search -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">