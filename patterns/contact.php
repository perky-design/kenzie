<?php
/**
 * Title: Contact
 * Slug: kenzie/contact
 * Categories: kenzie-pages
 * Keywords: contanct
 *
 * @package kenzie
 * @since 1.0.0
 */

?>
<!-- wp:heading {"level":1} -->
<h1><?php echo esc_html_x( 'Contact', 'sample content', 'kenzie' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:heading {"level":2} -->
<h2><?php echo esc_html_x( 'How can we help you?', 'sample content', 'kenzie' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'Company name', 'sample content', 'kenzie' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html_x( 'Location', 'sample content', 'kenzie' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><em><?php echo esc_html_x( 'By appointment only:', 'sample content', 'kenzie' ); ?></em></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses( _x( 'Company street address line one<br>Company street address line two', 'sample content', 'kenzie' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html_x( 'Postal adress', 'sample content', 'kenzie' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses( _x( 'Company postal address line one<br>Company postal address line two', 'sample content', 'kenzie' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html_x( 'Phone number', 'sample content', 'kenzie' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( '00-00 00 00', 'sample content', 'kenzie' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html_x( 'Email', 'sample content', 'kenzie' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses( _x( '<strong>General enquires:</strong> info@example.com', 'sample content', 'kenzie' ), array( 'strong' => array() ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses( _x( '<strong>Marketing:</strong> marketing@example.com', 'sample content', 'kenzie' ), array( 'strong' => array() ) ); ?></p>
<!-- /wp:paragraph -->
