<?php
/**
 * This file register Block styles to the Blockera WordPress theme.
 *
 * @package blockera
 * @author  Blockera Team
 * @license GNU General Public License v3 or later
 * @link    https://blockerawp.com
 */

/**
 * Register block styles
 *
 * @return void
 */
function blockera_register_block_styles() {

	// register_block_style( 
	// 	'core/button',
	// 	array(
	// 		'name'  => 'primary-filled-button',
	// 		'label' => __( 'Primary Filled', 'blockera' ),
	// 	)
	// );

	register_block_style( 
		'core/button',
		array(
			'name'  => 'primary-stroke-button',
			'label' => __( 'Strok', 'blockera' ),
		)
	);
	
	register_block_style( 
		'core/button',
		array(
			'name'  => 'primary-lighter-button',
			'label' => __( 'Lighter', 'blockera' ),
		)
	);

	register_block_style( 
		'core/button',
		array(
			'name'  => 'neutral-filled-button',
			'label' => __( 'Neutral Fill', 'blockera' ),
		)
	);

	register_block_style( 
		'core/button',
		array(
			'name'  => 'neutral-stroke-button',
			'label' => __( 'Neutral Strok', 'blockera' ),
		)
	);
	
	register_block_style( 
		'core/button',
		array(
			'name'  => 'neutral-lighter-button',
			'label' => __( 'Neutral Lighter', 'blockera' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'blockera-list-underline',
			'label' => __( 'Underlined list items', 'blockera' ),
		)
	);

	register_block_style( 
		'core/group',
		array(
			'name'  => 'blockera-box-shadow',
			'label' => __( 'Box shadow', 'blockera' ),
		)
	);

	register_block_style( 
		'core/column',
		array(
			'name'  => 'blockera-box-shadow',
			'label' => __( 'Box shadow', 'blockera' ),
		)
	);

	register_block_style(
		'core/columns',
		array(
			'name'  => 'blockera-box-shadow',
			'label' => __( 'Box shadow', 'blockera' ),
		)
	);

	register_block_style( 
		'core/details',
		array(
			'name'  => 'blockera-plus',
			'label' => __( 'Plus & minus', 'blockera' ),
		)
	);
}
add_action( 'init', 'blockera_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function blockera_unregister_block_style() {
	wp_enqueue_script(
		'blockera-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		BLOCKERA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'blockera_unregister_block_style' );
