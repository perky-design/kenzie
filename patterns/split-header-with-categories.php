<?php
/**
 * Title: Split post header with categories above title
 * Slug: kenzie/split-header-with-categories
 * Categories: kenzie-post-header
 * Block Types: core/post-categories, core/post-title
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
<!-- wp:post-title {""fontSize":"x-large"} /-->
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group">
<!-- wp:post-author {"showAvatar":false} /-->
<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
