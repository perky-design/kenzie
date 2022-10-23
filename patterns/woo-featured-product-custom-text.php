<?php
/**
 * Title: Featured product with custom text
 * Slug: kenzie/featured-product-custom-text
 * Categories: kenzie-woo
 * Keywords: product
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-product {"dimRatio":20,"editMode":false,"backgroundColor":"foreground","textColor":"background"} /--></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-column has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem">
<!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
<h2 class="has-text-align-left has-large-font-size"><?php echo esc_html_x( 'Product name', 'sample content', 'kenzie' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph --><p>
<?php echo esc_html_x( 'Add your custom product details here. You can also add extra images and change colors.', 'sample content', 'kenzie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
