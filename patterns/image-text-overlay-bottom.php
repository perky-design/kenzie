<?php
/**
 * Title: Image with text overlay
 * Slug: kenzie/image-text-overlay
 * Categories: kenzie-images
 * Block Types: core/image, core/group, core/heading
 *
 * @package kenzie
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"-80px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/girl-expressive.jpg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"is-kenzie-overlay","layout":{"contentSize":"340px"}} -->
<div class="wp-block-group is-kenzie-overlay"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","backgroundColor":"foreground","textColor":"background","fontSize":"medium"} -->
<h2 class="has-text-align-center has-text-color has-background-color has-foreground-background-color has-background has-medium-font-size"><?php echo esc_html_x( 'Example heading', 'sample content', 'kenzie' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Example text', 'sample content', 'kenzie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

