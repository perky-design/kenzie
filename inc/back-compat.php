<?php
/**
 * Backwards compatibility
 *
 * @package kenzie
 * @since 1.0.0
 */

/**
 * Prevent switching to the theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since 1.0.0
 * @return void
 */
function kenzie_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'kenzie_upgrade_notice' );
}
add_action( 'after_switch_theme', 'kenzie_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to the theme.
 *
 * @since 1.0.0
 *
 * @global string $wp_version WordPress version.
 * @return void
 */
function kenzie_upgrade_notice() {
	/* translators: %1$s: WordPress version. %2$s PHP version.*/
	$message = sprintf( esc_html__( 'This theme requires at least WordPress version 6.0 and PHP version 7.4. You are running WordPress version %1$s and PHP version %2$s. Please upgrade and try again.', 'kenzie' ), $GLOBALS['wp_version'], PHP_VERSION );
	printf( '<div class="error"><p>%s</p></div>', $message ); // phpcs:ignore WordPress.Security.EscapeOutput
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.5.
 *
 * @since 1.0.0
 *
 * @global string $wp_version WordPress version.
 * @return void
 */
function kenzie_customize() {
	wp_die(
		sprintf(
			/* translators: %1$s: WordPress version. %2$s PHP version.*/
			esc_html__( 'This theme requires at least WordPress version 6.0 and PHP version 7.4. You are running WordPress version %1$s and PHP version %2$s. Please upgrade and try again.', 'kenzie' ),
			esc_html( $GLOBALS['wp_version'] ),
			esc_html( PHP_VERSION )
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'kenzie_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.5.
 *
 * @since 1.0.0
 *
 * @global string $wp_version WordPress version.
 * @return void
 */
function kenzie_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die(
			sprintf(
				/* translators: %1$s: WordPress version. %2$s PHP version.*/
				esc_html__( 'This theme requires at least WordPress version 6.0 and PHP version 7.4. You are running WordPress version %1$s and PHP version %2$s. Please upgrade and try again.', 'kenzie' ),
				esc_html( $GLOBALS['wp_version'] ),
				esc_html( PHP_VERSION )
			)
		);
	}
}
add_action( 'template_redirect', 'kenzie_preview' );