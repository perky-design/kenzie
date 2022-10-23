<?php
/**
 * Title: Default post header
 * Slug: kenzie/post-header-default
 * Categories: kenzie-post-header
 * Block Types: core/post-featured-image, core/group, core/post-title
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:post-title {""fontSize":"x-large"} /-->
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group">
<!-- wp:post-author {"showAvatar":false} /-->
<!-- wp:post-date /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->
<!-- wp:separator {"opacity":"css","backgroundColor":"foreground","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-foreground-color has-css-opacity has-foreground-background-color has-background is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
