<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package freak
 */
?>
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>

<?php get_template_part('modules/header/mobile'); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'freak' ); ?></a>

<?php get_template_part('modules/header/jumbosearch'); ?>

<?php get_template_part('modules/header/static','bar'); ?>


		
<?php get_template_part('modules/header/masthead'); ?>
<?php get_template_part('slider', 'nivo'); ?>
<?php get_template_part('framework/featured-components/featured', 'posts'); ?>
	
	<div class="mega-container" >
			
		<div id="content" class="site-content container">