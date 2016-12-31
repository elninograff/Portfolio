<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ninograff_portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Rubik|Rubik+One|Rubik+Mono+One">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<aside id="aside">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ninograff_portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php ninograff_portfolio_the_custom_logo(); ?>

		<?php get_template_part( 'components/header/header', 'image' ); ?>

		<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>

		<?php ninograff_portfolio_social_menu(); ?>
	</header>
</aside>

