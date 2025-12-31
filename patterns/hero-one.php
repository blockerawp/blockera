<?php

/**
 * Title: Hero One
 * Slug: hero-one
 * Categories: blockera/hero
 * Description: 
 * Keywords: 
 * Viewport Width: 1440
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Hero One","categories":["blockera/hero"],"patternName":"hero-one"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9-xl","bottom":"var:preset|spacing|9-xl","left":"var:preset|spacing|2-xl","right":"var:preset|spacing|2-xl"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--9-xl);padding-right:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--9-xl);padding-left:var(--wp--preset--spacing--2-xl)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4-xl","left":"var:preset|spacing|7-xl"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"className":"wp-block-heading has-text-align-left has-6-xl-font-size"} -->
            <h1 class="wp-block-heading has-text-align-left has-6-xl-font-size">Build your websites even lighter with blocks!</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left">WordPress + Blockera Theme: Your Shortcut to Building Professional Websites with Ease, Flexibility, and No Coding Required!</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">Learn More</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"white","className":"is-style-stroke"} -->
                <div class="wp-block-button is-style-stroke"><a class="wp-block-button__link has-white-background-color has-background wp-element-button">Sign Up →</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"is-style-default","backgroundColor":"Primary-Light","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center is-style-default has-primary-light-background-color has-background"><!-- wp:image {"id":364,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|primary-blue"}}} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/hero-01.svg')); ?>" alt="" class="wp-image-364" style="aspect-ratio:1;object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->