<?php
/**
 * Title: Full width site header
 * Slug: kenzie/site-header-full-width
 * Categories: kenzie-site-header
 * Keywords: site header
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"calc(var(--wp--custom--v-spacing, 1.25rem) *2)","right":"var(--wp--custom--h-spacing, 2.375rem)","bottom":"calc(var(--wp--custom--v-spacing, 1.25rem) *2)","left":"var(--wp--custom--h-spacing, 2.375rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:calc(var(--wp--custom--v-spacing, 1.25rem) *2);padding-right:var(--wp--custom--h-spacing, 2.375rem);padding-bottom:calc(var(--wp--custom--v-spacing, 1.25rem) *2);padding-left:var(--wp--custom--h-spacing, 2.375rem)"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"className":"is-style-rounded"} /-->
<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"extra-small"} /--></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-kenzie-no-bg","fontSize":"extra-small"} /-->
<!-- wp:pattern {"slug":"kenzie/search-modal"} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
