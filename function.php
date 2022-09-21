<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blockitty
 * @since 1.0.0
 */

if ( ! defined( 'BLOCKITTY_VERSION' ) ) {
	define( 'BLOCKITTY_VERSION', wp_get_theme()->get( 'Version' ) );
}

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function blockitty_styles() {

    wp_register_style(
		'blockkity-style',
		get_stylesheet_uri(),
		array(),
		BLOCKITTY_VERSION
	);
	wp_enqueue_style( 'blockitty_styles' );

}
add_action( 'wp_enqueue_scripts', 'blockitty_styles' );


/**
 * Theme Support declarations
 */
if ( ! function_exists( 'blockitty_theme_setup' ) ) {

    function blockitty_theme_setup () {

        add_theme_support( 'wp-block-styles' );
    }
    add_action( 'after_setup_theme', 'blockitty_theme_setup' );

}

// Enable customizer (mainly for Additional CSS feature).
add_action( 'customize_register', '__return_true' );