<?php
/**
 * Title: Circular image overlay
 * Slug: kenzie/circular-image-overlay
 * Categories: kenzie-images
 * Block Types: core/image
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"-160px"}},"layout":{"inherit":false},"className":"kenzie-pattern-circular-image-overlay"} -->
<div class="wp-block-group kenzie-pattern-circular-image-overlay"><!-- wp:image {"align":"center","width":550,"height":550,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-expressive.jpg' ) ); ?>" alt="" width="550" height="550"/></figure>
<!-- /wp:image -->
<!-- wp:image {"align":"right","width":300,"height":300,"sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded is-kenzie-overlay"} -->
<figure class="wp-block-image alignright size-medium is-resized is-style-rounded is-kenzie-overlay"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="300" height="300"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
