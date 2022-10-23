<?php
/**
 * Title: Search title
 * Slug: kenzie/search-title
 * Inserter: no
 *
 * @package kenzie
 * @since 1.0.0
 */

if ( isset( $_GET['s'] ) ) {
	?>
	<!-- wp:heading {""fontSize":"xx-large"} -->
	<h1 class="has-xx-large-font-size wp-block-post-title">
	<?php
	$kenzie_search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
	/* translators: %s: Search term. */
	echo isset( $kenzie_search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'kenzie' ), esc_html( $kenzie_search_term ) ) : esc_html__( 'Search results', 'kenzie' );
	?>
	</h1>
	<!-- /wp:heading -->
	<?php
}
