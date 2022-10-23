<?php
/**
 * Title: Support call to action
 * Slug: kenzie/support-cta
 * Categories: kenzie-sections
 * Keywords: support, call to action, cta
 * Block Types: core/button
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:heading {"style":{"typography":{"letterSpacing":"1px"}},"className":"is-style-default has-caveat-font-family","fontSize":"x-large"} -->
<h2 class="is-style-default has-caveat-font-family has-x-large-font-size" style="letter-spacing:1px"><strong><?php echo esc_html_x( 'Need help?', 'sample content', 'kenzie' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"radius":"4px"},"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-radius:4px"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><a href="#"><?php echo esc_html_x( 'Visit our support forum', 'sample content', 'kenzie' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"2.2rem","right":"2.2rem"}}},"className":"is-style-kenzie-pulse-button","fontSize":"medium"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-kenzie-pulse-button has-medium-font-size"><a class="wp-block-button__link" style="padding-top:0.6rem;padding-right:2.2rem;padding-bottom:0.6rem;padding-left:2.2rem"><strong><?php echo esc_html_x( 'Contact Support', 'sample content', 'kenzie' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
