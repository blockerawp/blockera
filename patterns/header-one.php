<?php
/**
 * Title: Blockera Header One
 * Slug: header-one
 * Categories: header
 * Description:
 * Keywords:
 * Viewport Width: 1440
 * Block Types: core/template-part/header
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Blockera Header One","categories":["header"],"patternName":"header-one"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|2-xl","left":"var:preset|spacing|2-xl"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-right:var(--wp--preset--spacing--2-xl);padding-left:var(--wp--preset--spacing--2-xl)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"}}},"backgroundColor":"white","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)">
		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"className":"is-style-default"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"ref":15,"textColor":"neutral-700","overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","justifyContent":"center"}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline has-sm-font-size is-style-blockera-stroke-button is-style-primary-filled-button"} -->
				<div class="wp-block-button is-style-outline has-sm-font-size is-style-blockera-stroke-button is-style-primary-filled-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Sign in', 'blockera' ); ?></a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"has-sm-font-size is-style-blockera-fancy-button is-style-primary-stroke-button"} -->
				<div class="wp-block-button has-sm-font-size is-style-blockera-fancy-button is-style-primary-stroke-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'blockera' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
