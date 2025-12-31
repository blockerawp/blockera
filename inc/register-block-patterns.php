<?php
/**
 * This file register block patterns to the Blockera WordPress theme.
 *
 * @package blockera
 * @author  Blockera Team
 * @license GNU General Public License v3 or later
 * @link    https://blockerawp.com
 */

/**
 * Register pattern categories.
 *
 * @return void
 */
function blockera_register_block_patterns() {

	// Register "Hero" block pattern category.
	register_block_pattern_category(
		'blockera/hero',
		array( 'label' => esc_html__( 'Hero', 'blockera' ) )
	);

	// Register "Stats" block pattern category.
	register_block_pattern_category(
		'blockera/stats',
		array( 'label' => esc_html__( 'Stats', 'blockera' ) )
	);

	// Register "Features" block pattern category.
	register_block_pattern_category(
		'blockera/features',
		array( 'label' => esc_html__( 'Features', 'blockera' ) )
	);

	// Register "Testimonials" block pattern category.
	register_block_pattern_category(
		'blockera/testimonials',
		array( 'label' => esc_html__( 'Testimonials', 'blockera' ) )
	);

	// Register "FAQ" block pattern category.
	register_block_pattern_category(
		'blockera/faq',
		array( 'label' => esc_html__( 'FAQ', 'blockera' ) )
	);

	// Register "Pricing" block pattern category.
	register_block_pattern_category(
		'blockera/pricing',
		array( 'label' => esc_html__( 'Pricing', 'blockera' ) )
	);

	// Register "Call To Action" block pattern category.
	register_block_pattern_category(
		'blockera/call-to-action',
		array( 'label' => esc_html__( 'Call To Action', 'blockera' ) )
	);

	// Register "404" block pattern category.
	register_block_pattern_category(
		'blockera/404',
		array( 'label' => esc_html__( '404', 'blockera' ) )
	);

	// Register "Customer Logos" block pattern category.
	register_block_pattern_category(
		'blockera/customer-logos',
		array( 'label' => esc_html__( 'Customer Logos', 'blockera' ) )
	);

	// Register "Our Team" block pattern category.
	register_block_pattern_category(
		'blockera/our-team',
		array( 'label' => esc_html__( 'Our Team', 'blockera' ) )
	);

	// Register "Contact" block pattern category.
	register_block_pattern_category(
		'blockera/contact',
		array( 'label' => esc_html__( 'Contact', 'blockera' ) )
	);

	// Register "Gallery" block pattern category.
	register_block_pattern_category(
		'blockera/gallery',
		array( 'label' => esc_html__( 'Gallery', 'blockera' ) )
	);

	// Register "Bio" block pattern category.
	register_block_pattern_category(
		'blockera/bio',
		array( 'label' => esc_html__( 'Bio', 'blockera' ) )
	);


	// Register "Pages" block pattern category.
	register_block_pattern_category(
		'blockera/pages',
		array( 'label' => esc_html__( 'Pages', 'blockera' ) )
	);

}
add_action( 'init', 'blockera_register_block_patterns', 9 );


// Remove all core WordPress patterns
add_action( 'after_setup_theme', 'blockera_remove_core_patterns' );

function blockera_remove_core_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 * Must be called after the patterns and pattern categories that you want to unregister have been added.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/	
 *
 *
 * @return void
 */
function blockera_unregister_patterns() {
	unregister_block_pattern( 'core/query-small-posts' );
	unregister_block_pattern( 'core/query-large-title-posts' );
	unregister_block_pattern( 'core/query-offset-posts' );
	unregister_block_pattern_category( 'featured' );
}
add_action( 'init', 'blockera_unregister_patterns', 10 );