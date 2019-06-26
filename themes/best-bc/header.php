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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<div class="site-branding site-title screen-reader-text">
				<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div><!-- .site-branding -->

			<div class="nav-container">
				<nav id="site-navigation" class="main-navigation" role="navigation">

					<button class="hamburger-menu hamburger--slider" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>

					<div class="header-primary-menu">
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					</div>

				</nav><!-- navigation -->
			</div>

			<div class="best-header-logo">
				<a href="<?php echo get_option("siteurl"); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/vector-icons/best-logo/Best-v1-white.svg" alt="">
				</a>
			</div><!-- heder-logo -->

			<div class="best-search-form">
				<?php get_search_form(); ?>
			</div><!-- search -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">