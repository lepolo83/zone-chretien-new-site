<?php

/**
 * Title: Featured Banner Slider 4
 * Slug: magnewspress/featured-banner-4
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":23,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"magnewspress-slider"} -->
    <div class="wp-block-query magnewspress-slider"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"className":"swiper-wrapper magnewspress-swiper-holder","layout":{"type":"default","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.07},"minHeight":700,"gradient":"dark-gradient-btm","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"className":"cover-image-zoom","layout":{"type":"constrained","contentSize":"760px"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center cover-image-zoom" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-btm-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","left":"40px","right":"40px","top":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group has-box-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#00acc1"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"fontSize":"xxx-large","fontFamily":"public-sans"} /-->

                        <!-- wp:post-excerpt {"textAlign":"center","excerptLength":21,"style":{"spacing":{"margin":{"bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} /-->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-author-name-with-icon","fontSize":"small"} /-->

                            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-post-date-with-icon","fontSize":"small"} /-->
                        </div>
                        <!-- /wp:group -->
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