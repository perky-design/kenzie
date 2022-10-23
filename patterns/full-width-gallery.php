<?php
/**
 * Title: Full width gallery
 * Slug: kenzie/full-width-gallery
 * Categories: kenzie-images
 * Block Types: core/gallery, core/image
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:gallery {"columns":6,"linkTo":"none","sizeSlug":"thumbnail","align":"full","style":{"spacing":{"blockGap":"0px"}}} -->
<figure class="wp-block-gallery alignfull has-nested-images columns-6 is-cropped">
<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-thumbnail is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-headphones.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/man-smile.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-headphones.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/man-smile.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->
