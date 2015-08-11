<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">

<title><?php bloginfo('name');?> </title>

<meta name="viewport" content="width = device-width, initial-scale = 1">

<link rel=icon href="" sizes="" type=""><!-- favicon placeholder-->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/reset.css" />

<?php 
	//Necessary in <head> for JS and plugins to work. 
	//I like it before style.css loads so the theme stylesheet is more specific than all others.
	wp_head();  ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> <!-- link to the stylesheet style.css -->

</head>

<body <?php 
		
		page_bodyclass();

		?>>

<!-- <section class="search cf">
	<?php //get_search_form(); //includes searchform.php if it exists, if not, this outputs the default search bar ?>
</section> -->

	  <?php
			/**
			 * @hooked storefront_skip_links - 0
			 * @hooked storefront_social_icons - 10
			 * @hooked storefront_site_branding - 20
			 * @hooked storefront_secondary_navigation - 30
			 * @hooked storefront_product_search - 40
			 * @hooked storefront_primary_navigation - 50
			 * @hooked storefront_header_cart - 60
			 */
			do_action( 'storefront_header' ); ?>

<header class="cf">

<h1 class="logo">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php bloginfo( 'name' ) ?>">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" /> <!-- placeholder for logo -->
	</a>
</h1>

<?php toggleButton(); ?>

<?php wp_nav_menu( array(
				'theme_location' 	=> 'main_nav', //one of the menu areas from functions.php (has to be spelled the same.)
				'container' 		=> 'nav', //div or nav
				'container_class'	=> 'gnav cf', 
				//'fallback_cb' 		=> '',prevent ugly list of pages
				'menu_class' 		=> 'gmenu cf'
			) ); ?>

</header>