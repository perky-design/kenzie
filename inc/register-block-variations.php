<?php
/**
 * Block Variations
 *
 * @package kenzie
 * @since 1.0.0
 */

/**
 * Create a sticky variations of the header and navigation block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.0
 *
 * @return void
 */
function kenzie_register_block_variation() {
	wp_enqueue_script(
		'kenzie-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		KENZIE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'kenzie_register_block_variation' );
