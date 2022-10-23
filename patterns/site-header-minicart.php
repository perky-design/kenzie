<?php
/**
 * Title: Site header with Mini Cart block pattern
 * Slug: kenzie/site-header-minicart
 * Categories: kenzie-site-header, kenzie-woo
 * Keywords: site header, cart
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"level":0,"width":60,"className":"is-style-rounded"} /-->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-kenzie-no-bg","fontSize":"medium"} /-->
<!-- wp:pattern {"slug":"kenzie/search-modal"} /-->
<!-- wp:woocommerce/mini-cart /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
