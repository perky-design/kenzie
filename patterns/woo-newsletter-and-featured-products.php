<?php
/**
 * Title: Newsletter signup offer and featured products
 * Slug: kenzie/newsletter-and-featured-products
 * Categories: kenzie-woo
 * Keywords: product
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":null,"align":"wide","backgroundColor":"background"} -->
<div class="wp-block-columns alignwide has-background-background-color has-background"><!-- wp:column {"verticalAlignment":"top","backgroundColor":"foreground"} -->
<div class="wp-block-column is-vertically-aligned-top has-foreground-background-color has-background"><!-- wp:group {"backgroundColor":"foreground","className":"is-style-kenzie-slide-up","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-kenzie-slide-up has-foreground-background-color has-background"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","textColor":"background","className":"is-style-default","fontSize":"medium"} -->
<p class="has-text-align-center is-style-default has-background-color has-text-color has-medium-font-size"><strong><?php esc_html_e( '5% off on your first purchase when you sign up for our Newsletter', 'kenzie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","className":"is-style-kenzie-shadow-button","fontSize":"medium"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-kenzie-shadow-button has-medium-font-size"><a class="wp-block-button__link"><?php esc_html_e( 'Signup', 'kenzie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:woocommerce/featured-product {"dimRatio":80,"editMode":false,"backgroundColor":"foreground","textColor":"background"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:woocommerce/featured-product {"dimRatio":80,"editMode":false,"backgroundColor":"foreground","textColor":"background"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
