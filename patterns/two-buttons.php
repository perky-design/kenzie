<?php
/**
 * Title: Two buttons
 * Slug: kenzie/two-buttons
 * Categories: buttons, kenzie-sections
 * Block Types: core/buttons
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php echo esc_html_x( 'Example paragraph, replace this with your own text.<br>You can use different colored buttons for your primary and secondary call to actions.', 'sample content', 'kenzie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link"><?php echo esc_html_x( 'Button one', 'sample content', 'kenzie' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link"><?php echo esc_html_x( 'Button two', 'sample content', 'kenzie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
