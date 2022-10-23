<?php
/**
 * Title: Dual images
 * Slug: kenzie/dual-images
 * Categories: kenzie-images
 * Block Types: core/image, core/media-text
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:cover {"dimRatio":10,"overlayColor":"foreground","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"kenzie-pattern-header-image","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide kenzie-pattern-header-image"><!-- wp:media-text {"mediaPosition":"right","mediaId":146,"mediaLink":"","mediaType":"image","verticalAlignment":"bottom","imageFill":false} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" class="wp-image-146 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background","className":"has-xxx-large-font-size kenzie-style-heading-with-em"} -->
<h2 class="has-xxx-large-font-size has-background-color has-text-color kenzie-style-heading-with-em">
	<?php
		echo wp_kses(
			_x( 'Create your <em>website</em> <br/>with blocks.', 'sample content', 'kenzie' ),
			array(
				'em' => array(),
				'br' => array(),
			)
		);
		?>
</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"mediaPosition":"right","mediaLink":"","mediaType":"image","isStackedOnMobile":false,"verticalAlignment":"top","imageFill":false} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/man-smile.jpg' ) ); ?>" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><?php echo esc_html_x( 'Content', 'sample content', 'kenzie' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
