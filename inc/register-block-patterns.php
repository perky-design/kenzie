<?php
/**
 * Block patterns
 *
 * @package kenzie
 * @since 1.0.0
 */

/**
 * Registers block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kenzie_register_block_pattern_category() {

	register_block_pattern_category(
		'kenzie-images',
		array( 'label' => esc_html__( 'Kenzie - Images', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-woo',
		array( 'label' => esc_html__( 'Kenzie - WooCommerce', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-post-header',
		array( 'label' => esc_html__( 'Kenzie - Post and page headers', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-pages',
		array( 'label' => esc_html__( 'Kenzie - Pages', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-sections',
		array( 'label' => esc_html__( 'Kenzie - Page Sections', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-blog',
		array( 'label' => esc_html__( 'Kenzie - Blog layouts', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-site-footer',
		array( 'label' => esc_html__( 'Kenzie - Site Footers', 'kenzie' ) )
	);

	register_block_pattern_category(
		'kenzie-site-header',
		array( 'label' => esc_html__( 'Kenzie - Site Headers', 'kenzie' ) )
	);

}
add_action( 'init', 'kenzie_register_block_pattern_category', 9 );
