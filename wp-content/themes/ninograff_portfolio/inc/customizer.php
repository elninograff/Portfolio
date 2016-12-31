<?php
/**
 * Ninograff_portfolio Theme Customizer
 *
 * @package Ninograff_portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ninograff_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'ninograff_portfolio_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ninograff_portfolio_customize_preview_js() {
	wp_enqueue_script( 'ninograff_portfolio_customizer', get_template_directory_uri() . '/assets/js/customizer.js', true );
}
add_action( 'customize_preview_init', 'ninograff_portfolio_customize_preview_js' );
