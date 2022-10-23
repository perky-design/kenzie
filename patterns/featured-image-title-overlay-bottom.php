<?php
/**
 * Title: Featured image with title overlay
 * Slug: kenzie/featured-image-title-overlay
 * Categories: kenzie-post-header
 * Keywords: featured image, title, overlay
 * Block Types: core/post-featured-image
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"-80px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:group {"className":"is-kenzie-overlay","layout":{"contentSize":"340px"}} -->
<div class="wp-block-group is-kenzie-overlay"><!-- wp:group {"style":{"border":{"radius":"4px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-group has-foreground-background-color has-background" style="border-radius:4px">
<!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

