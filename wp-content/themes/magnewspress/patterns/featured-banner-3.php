<?php

/**
 * Title: Featured Banner Slider 3
 * Slug: magnewspress/featured-banner-3
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":23,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"magnewspress-slider"} -->
    <div class="wp-block-query magnewspress-slider"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"className":"swiper-wrapper magnewspress-swiper-holder","layout":{"type":"default","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.07},"minHeight":640,"gradient":"dark-gradient-btm","contentPosition":"center center","style":{"spacing":{"padding":{"top":"24px","bottom":"16px","left":"24px","right":"24px"}},"border":{"radius":"0px"}},"className":"cover-image-zoom","layout":{"type":"constrained","contentSize":"760px"}} -->
            <div class="wp-block-cover cover-image-zoom" style="border-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:16px;padding-left:24px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-btm-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#971a83"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"fontSize":"xxx-large","fontFamily":"playfair-display"} /-->

                        <!-- wp:post-excerpt {"textAlign":"center","excerptLength":21,"style":{"spacing":{"margin":{"bottom":"16px"}}},"fontSize":"medium"} /-->

                        <!-- wp:read-more {"content":"Explore More","style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"margin":{"top":"30px"}},"border":{"radius":"0px","width":"1px"}},"backgroundColor":"transparent","textColor":"box-background","className":"is-style-readmore-hover-secondary-fill","fontSize":"medium"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"slider-control"},"className":"magnewspress-slider-controls","layout":{"type":"constrained"}} -->
        <div class="wp-block-group magnewspress-slider-controls"><!-- wp:html -->
            <div class="magnewspress-navigation">
                <div class="swiper-button-prev magnewspress-button-prev"></div>
                <div class="swiper-button-next magnewspress-button-next"></div>
            </div>
            <div class="swiper-pagination magnewspress-pagination"></div>
            <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->