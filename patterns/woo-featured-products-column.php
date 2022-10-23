<?php
/**
 * Title: Featured products columns block
 * Slug: kenzie/featured-products-columns
 * Categories: kenzie-woo
 * Block Types: core/columns
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":null,"align":"full","backgroundColor":"background"} -->
<div class="wp-block-columns alignfull has-background-background-color has-background">
<!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center">
<!-- wp:heading {"textAlign":"center","textColor":"foreground",""fontSize":"x-large"} -->
<h2 class="has-text-align-center has-foreground-color has-text-color has-x-large-font-size"><?php echo esc_html_x( 'Featured products', 'sample content', 'kenzie' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size">
<a class="wp-block-button__link"><?php echo esc_html_x( 'Add shop link', 'sample content', 'kenzie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:woocommerce/featured-product {"dimRatio":80,"editMode":false,"backgroundColor":"foreground","textColor":"background"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:woocommerce/featured-product {"dimRatio":90,"editMode":false,"backgroundColor":"background","textColor":"foreground"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
