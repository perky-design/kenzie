<?php
/**
 * Title: Circular image overlay with heading and CTA
 * Slug: kenzie/circular-image-overlay-with-heading-and-cta
 * Categories: kenzie-images
 * Block Types: core/image, core/heading, core/paragraph, core/button
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"foreground","align":"full","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"wideSize":"1100px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"-160px"}},"className":"kenzie-pattern-circular-image-overlay","layout":{"inherit":true}} -->
<div class="wp-block-group kenzie-pattern-circular-image-overlay"><!-- wp:image {"align":"center","width":413,"height":413,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-expressive.jpg' ) ); ?>" alt="" width="413" height="413"/></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"right","width":138,"height":138,"sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded is-kenzie-overlay"} -->
<figure class="wp-block-image alignright size-medium is-resized is-style-rounded is-kenzie-overlay"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="138" height="138"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"background","fontSize":"xxx-large"} -->
<h2 class="has-background-color has-text-color has-xxx-large-font-size"><?php echo esc_html_x( 'Example heading', 'sample content', 'kenzie' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color"><?php echo esc_html_x( 'Add your custom product details here. You can also add extra images and change colors.', 'sample content', 'kenzie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-kenzie-shadow-button"} -->
<div class="wp-block-button is-style-kenzie-shadow-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background"><strong><?php echo esc_html_x( 'Call to Action button', 'sample content', 'kenzie' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
