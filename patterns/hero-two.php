<?php

/**
 * Title: Hero Two
 * Slug: hero-two
 * Categories: blockera/hero
 * Description: 
 * Keywords: 
 * Viewport Width: 1440
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"name":"Hero Two","categories":["blockera/hero"],"patternName":"hero-two"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9-xl","bottom":"var:preset|spacing|9-xl","left":"var:preset|spacing|2-xl","right":"var:preset|spacing|2-xl"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-50-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--9-xl);padding-right:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--9-xl);padding-left:var(--wp--preset--spacing--2-xl)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"64px","left":"64px"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|7-xl"}},"layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-700"}}}},"textColor":"primary-700"} -->
                <p class="has-text-align-center has-primary-700-color has-text-color has-link-color"><?php esc_html_e('Tagline Here', 'blockera'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading"} -->
                <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e('Medium length hero headline here', 'blockera'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'blockera'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started for Free', 'blockera' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"},"color":[]}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="https://images.unsplash.com/photo-1719937206255-cc337bccfc7d?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="border-radius:16px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->