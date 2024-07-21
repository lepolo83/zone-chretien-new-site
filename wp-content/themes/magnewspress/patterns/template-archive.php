<?php

/**
 * Title: Archive Template
 * Slug: magnewspress/template-archive
 * Categories: template
 * Inserter: false
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":{"width":"0px","style":"none"},"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"box-background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-box-background-background-color has-background" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:query-title {"type":"archive","textAlign":"left","showPrefix":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"big"} /-->

                    <!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":3}} -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"second-box-background","className":"is-style-default","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default has-second-box-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":210,"gradient":"dark-gradient-btm","contentPosition":"bottom left","className":"is-style-default","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-default" style="min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-btm-gradient-background"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"10px"}},"className":"is-style-categories-background"} /--></div>
                            </div>
                            <!-- /wp:cover -->

                            <!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"16px","bottom":"16px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"small"} /-->

                                <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"className":"is-style-default","fontSize":"big"} /-->

                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"className":"is-style-author-name-with-icon"} /-->

                                    <!-- wp:post-date {"className":"is-style-post-date-with-icon"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-excerpt {"excerptLength":15,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:post-template -->

                        <!-- wp:query-pagination -->
                        <!-- wp:query-pagination-previous /-->

                        <!-- wp:query-pagination-numbers /-->

                        <!-- wp:query-pagination-next /-->
                        <!-- /wp:query-pagination -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"magnewspress","area":"uncategorized"} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->