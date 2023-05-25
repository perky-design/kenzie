<?php
/**
 * Title: Footer links
 * Slug: kenzie/footer-links
 * Inserter: no
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size"><?php echo esc_html_x( 'Copyright', 'Footer copyright', 'kenzie' ) . ' ' . date_i18n( 'Y' ); ?></p><!-- /wp:paragraph -->
<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
<?php
if ( get_the_privacy_policy_link() ) {
	echo '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
}
?>
<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->
</div><!-- /wp:group -->
<!-- wp:pattern {"slug":"kenzie/footer-buttons"} /-->
</div><!-- /wp:group -->
