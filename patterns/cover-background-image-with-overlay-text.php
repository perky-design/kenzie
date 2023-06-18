<?php
/**
 * Title: Cover image with overlay text
 * Slug: kenzie/cover-background-image-with-overlay-text
 * Categories: kenzie-images, kenzie-section
 * Block Types: core/heading, core/group, core/post-content
 * Keywords: cover, image, overlay, home, front
 *
 * @package kenzie
 * @since 1.1.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-curious.jpg' ) ); ?>","id":68,"dimRatio":30,"focalPoint":{"x":0.63,"y":0.31},"minHeight":60,"minHeightUnit":"vh","contentPosition":"bottom center","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-68" alt="<?php _e( 'Asian girl with long black hair, partly in her face, with red lipctick', 'kenzie' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-curious.jpg' ) ); ?>" style="object-position:63% 31%" data-object-fit="cover" data-object-position="63% 31%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","className":"cover-text","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide cover-text"><!-- wp:cover {"dimRatio":0,"overlayColor":"transparent","contentPosition":"bottom left","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"left":"0"}}},"fontSize":"banner-title"} -->
<p class="has-text-align-right has-banner-title-font-size" style="margin-left:0"><?php _e( 'Creativity loves constrains', 'kenzie' ); ?><br><?php _e( 'Balance this with a healthy disregard for the impossible', 'kenzie' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
