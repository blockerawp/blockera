<?php

/**
 * Title: Footer Three
 * Slug: blockera/footer-three
 * Categories: footer
 * Description: 
 * Keywords: 
 * Viewport Width: 1440
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Three","categories":["footer"],"patternName":"blockera/footer-three"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9-xl","bottom":"var:preset|spacing|9-xl","left":"var:preset|spacing|2-xl","right":"var:preset|spacing|2-xl"},"blockGap":"var:preset|spacing|7-xl","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"neutral-900","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-900-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--9-xl);padding-right:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--9-xl);padding-left:var(--wp--preset--spacing--2-xl)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":40} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:site-title {"className":"is-style-default","textColor":"white"} /-->

                <!-- wp:site-tagline /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Link One', 'blockera'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Link Two', 'blockera'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Link Three', 'blockera'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Link Four', 'blockera'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Link Five', 'blockera'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"align":"center","className":"is-style-default","backgroundColor":"white"} -->
        <hr class="wp-block-separator aligncenter has-text-color has-white-color has-alpha-channel-opacity has-white-background-color has-background is-style-default" />
        <!-- /wp:separator -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
        <div class="wp-block-group"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"s","service":"facebook"} /-->

                <!-- wp:social-link {"url":"s","service":"dribbble"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"s","service":"github"} /-->
            </ul>
            <!-- /wp:social-links -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-700"}}}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('© ', 'blockera'); ?><a href="https://blockerawp.com/"><?php esc_html_e('Blockera', 'blockera'); ?></a><?php esc_html_e('. All rights reserved.', 'blockera'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->