<?php

/**
 * Title: 404 One
 * Slug: 404-one
 * Categories: blockera/404
 * Description: 
 * Keywords: 
 * Viewport Width: 1440
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"404 Error","categories":["blockera/404"],"patternName":"404-one"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9-xl","bottom":"var:preset|spacing|9-xl","left":"var:preset|spacing|2-xl","right":"var:preset|spacing|2-xl"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-50-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--9-xl);padding-right:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--9-xl);padding-left:var(--wp--preset--spacing--2-xl)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3-xl"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-700"}}}},"textColor":"primary-700"} -->
        <p class="has-text-align-center has-primary-700-color has-text-color has-link-color"><?php esc_html_e( 'Page not found', 'blockera' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"256px","lineHeight":"1.0"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:256px;line-height:1.0"><?php esc_html_e( '404', 'blockera' ); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e( 'Sorry, we couldn’t find the page you’re looking for.', 'blockera' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( '← Go Back Home', 'blockera' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->