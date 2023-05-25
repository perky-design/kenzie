<?php
/**
 * Title: Circular image with heading
 * Slug: kenzie/circular-image-with-heading
 * Categories: kenzie-images
 * Block Types: core/image, core/heading
 * Keywords: circular, image, heading, paragraph, button
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:cover {"dimRatio":100,"overlayColor":"foreground","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"className":"kenzie-pattern-header-image","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group alignwide kenzie-pattern-header-image"><!-- wp:image {"width":400,"height":400,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="<?php _e( 'Woman with curls', 'kenzie' ); ?>" width="400" height="400"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textColor":"background","className":"has-xxx-large-font-size kenzie-style-heading-with-em"} -->
<h1 class="has-xxx-large-font-size has-background-color has-text-color kenzie-style-heading-with-em">
	<?php
		echo wp_kses(
			_x( 'Create your <em>website</em> <br/>with blocks.', 'sample content', 'kenzie' ),
			array(
				'em' => array(),
				'br' => array(),
			)
		);
		?>
</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
