<?php
/**
 * Title: Blog layout two
 * Slug: kenzie/blog-layout-two
 * Categories: kenzie-blog
 * Block Types: core/qyer, core/post-template
 * Keywords: blog
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"3rem"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"full","className":"kenzie-blog-layout kenzie-hide-sticky","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull kenzie-blog-layout kenzie-hide-sticky">
<!-- wp:heading {"fontSize":"small"} -->
<h2 class="has-small-font-size"><?php echo esc_html_x( 'Featured', 'sample content', 'kenzie' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"border":{"radius":"4px"},"color":{"background":"#f2f2f203"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-background" style="background-color:#f2f2f203;border-radius:4px"><!-- wp:post-featured-image {"isLink":true,"width":"100px","height":"100px","className":"is-style-kenzie-zoom-image is-style-kenzie-image-border-radius"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"medium"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"false","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template -->
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->
<!-- wp:post-featured-image {"isLink":true,"height":"200px","style":{"spacing":{"margin":{"top":"2.9rem"}}},"className":"is-style-kenzie-zoom-image is-style-kenzie-image-border-radius"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
