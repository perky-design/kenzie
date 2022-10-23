<?php
/**
 * Title: Full screen featured image cover block
 * Slug: kenzie/full-featured-image-cover
 * Categories: kenzie-post-header
 * Block Types: core/post-featured-image, core/post-author, core/post-date, core/post-title
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","backgroundColor":"foreground","textColor":"background","fontSize":"xx-large"} /-->

<!-- wp:group {"className":"has-foreground-background-color","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","backgroundColor":"foreground","style":{"spacing":{"padding":{"left":"1rem","right":"1rem"}}}}} -->
<div class="wp-block-group has-foreground-background-color"><!-- wp:post-author {"textAlign":"center","showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium"} /-->

<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

