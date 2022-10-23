<?php
/**
 * Title: Newsletter Subscription Call to action
 * Slug: kenzie/newsletter-subscription-cta
 * Categories: kenzie-sections
 * Block Types: core/paragraph, core/heading, core/button
 * Keywords: newsletter, subscription, call to action
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}},"layout":{"inherit":false,"contentSize":"25rem"}} -->
<div class="wp-block-group alignwide" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%"><!-- wp:group {"align":"full","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"1%","right":"2%","bottom":"1%","left":"2%"}}},"className":"is-style-kenzie-slide-up is-style-kenzie-box-shadow","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-kenzie-slide-up is-style-kenzie-box-shadow" style="border-radius:4px;padding-top:1%;padding-right:2%;padding-bottom:1%;padding-left:2%"><!-- wp:paragraph {"align":"center",className":"is-style-default","fontSize":"large"} -->
<p class="has-text-align-center is-style-default has-large-font-size"><strong><?php echo esc_html_x( 'Get notified of our latest offers and new products', 'sample content', 'kenzie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"2.2rem","right":"2.2rem"}}},"className":"is-style-kenzie-shadow-button","fontSize":"medium"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-kenzie-shadow-button has-medium-font-size"><a class="wp-block-button__link" style="padding-top:0.6rem;padding-right:2.2rem;padding-bottom:0.6rem;padding-left:2.2rem"><strong><?php echo esc_html_x( 'Subscribe', 'sample content', 'kenzie' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
