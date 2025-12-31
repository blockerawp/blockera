<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blockera
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'BLOCKERA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blockera_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote', 'navigation', 'search' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "blockera-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'blockera_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blockera_styles() {
	wp_enqueue_style(
		'blockera-style',
		get_stylesheet_uri(),
		[],
		BLOCKERA_VERSION
	);
	wp_enqueue_style(
		'blockera-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		BLOCKERA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'blockera_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

//Change button style filled text
function blockera_change_default_text() {
    wp_enqueue_script(
        'blockera-custom-style-label',
        get_template_directory_uri() . '/assets/js/register-button-name.js',
        array( 'wp-dom-ready', 'wp-edit-post' ),
        false,
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'blockera_change_default_text' );



