<?php

/**
 * Title: Default Home Section With Sidebar 5
 * Slug: magnewspress/homesection-with-sidebar-5
 * Categories: template
 * Inserter: false
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/team_1.jpg',
    $magnewspress_url . 'assets/images/sidebar_ads.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"40px","bottom":"40px"},"margin":{"top":"24px","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:24px;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"48px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"2px","right":"2px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:2px;padding-bottom:0px;padding-left:2px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px"}},"border":{"color":"#641cff","width":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group has-border-color" style="border-color:#641cff;border-width:1px;margin-top:0;margin-bottom:0;padding-left:0px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"width":"0px","style":"none"},"spacing":{"padding":{"bottom":"16px","top":"16px","right":"16px","left":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group has-box-background-color has-text-color has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"heading-color","fontSize":"big","fontFamily":"dm-serif-display"} -->
                        <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-dm-serif-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Today\'s Stories', 'magnewspress') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":27,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":2}} -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":280,"gradient":"dark-gradient-btm","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left magnewspress-translate-cover" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient has-dark-gradient-btm-gradient-background"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-categories-background-with-round is-style-categories-background primary-color-vivid"} /--></div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#641cff"}}}},"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"24px","lineHeight":"1.3"}},"fontFamily":"playfair-display"} /-->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-author-name-with-icon","fontSize":"x-small"} /-->

                            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-post-date-with-icon","fontSize":"x-small"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"textAlign":"left","excerptLength":29,"style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}}}} /-->

                        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"#641cff"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"30px","right":"30px"}},"border":{"width":"1px"},"color":{"text":"#641cff"}},"className":"is-style-readmore-hover-secondary-fill"} /--></div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-box-background"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color","className":"magnewspress-pagination-purple"} -->
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

        <!-- wp:column {"width":"28%"} -->
        <div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"20px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":""}} -->
                <div class="wp-block-group has-box-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"16px","top":"16px","bottom":"16px","right":"16px"}},"border":{"color":"#641cff","width":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-border-color" style="border-color:#641cff;border-width:1px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"width":"0px","style":"none"},"spacing":{"padding":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group has-box-background-color has-text-color has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"heading-color","fontSize":"big","fontFamily":"dm-serif-display"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-dm-serif-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('About Author', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"24px","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"width":"1px"}},"borderColor":"header-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group magnewspresss-group-hover has-border-color has-header-color-border-color" style="border-width:1px;margin-top:24px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":7090,"width":"140px","height":"140px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($magnewspress_images[0]) ?>" alt="" class="wp-image-7090" style="border-radius:100px;object-fit:cover;width:140px;height:140px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big","fontFamily":"jost"} -->
                        <h4 class="wp-block-heading has-text-align-center has-jost-font-family has-big-font-size" style="margin-top:24px"><?php esc_html_e('Alex Lorel', 'magnewspress') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center"} -->
                        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam.', 'magnewspress') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"20px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links" style="margin-top:20px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"20px","bottom":"20px"}}},"backgroundColor":"transparent","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group magnewspresss-group-hover has-transparent-background-color has-background" style="margin-top:20px;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":8273,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($magnewspress_images[1]) ?>" alt="" class="wp-image-8273" style="border-radius:0px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"20px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":""}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"16px","top":"16px","bottom":"16px","right":"16px"}},"border":{"color":"#641cff","width":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-border-color" style="border-color:#641cff;border-width:1px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"width":"0px","style":"none"},"spacing":{"padding":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group has-box-background-color has-text-color has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"heading-color","fontSize":"big","fontFamily":"dm-serif-display"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-dm-serif-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Categories', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"header-color","backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group magnewspresss-group-hover has-border-color has-header-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-radius:0px;margin-top:20px;margin-bottom:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style is-style-magnewspress-categories-bullet-hide-style magnewspress-sidebar-cat","style":{"typography":{"lineHeight":"2"}}} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"20px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":""}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"16px","top":"16px","bottom":"16px","right":"16px"}},"border":{"color":"#641cff","width":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-border-color" style="border-color:#641cff;border-width:1px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"width":"0px","style":"none"},"spacing":{"padding":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group has-box-background-color has-text-color has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"heading-color","fontSize":"big","fontFamily":"dm-serif-display"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-dm-serif-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Tags', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"header-color","backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group magnewspresss-group-hover has-border-color has-header-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-radius:0px;margin-top:20px;margin-bottom:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:tag-cloud {"smallestFontSize":"10pt","largestFontSize":"10pt","className":"magnewspress-sidebar-tags","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->