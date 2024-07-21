<?php

/**
 * Title: Home Section With Sidebar 2
 * Slug: magnewspress/homesection-with-sidebar-2
 * Categories: template
 * Inserter: false
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/team_1.jpg',
    $magnewspress_url . 'assets/images/sidebar_ads.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"2px","right":"2px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:2px;padding-bottom:0px;padding-left:2px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px"}},"border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":{"color":"var:preset|color|header-color","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-left:0px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"style":"none","width":"0px"},"spacing":{"padding":{"bottom":"10px","top":"10px","right":"30px","left":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}},"color":{"background":"#1a9763"}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group has-box-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#1a9763;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"medium","fontFamily":"jost"} -->
                        <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-jost-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Today\'s Stories', 'magnewspress') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":27,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}}} -->
                    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"20px","color":"#1a966229","width":"1px"}},"className":"magnewspress-translate-columns"} -->
                    <div class="wp-block-columns alignwide are-vertically-aligned-center magnewspress-translate-columns has-border-color" style="border-color:#1a966229;border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:post-featured-image {"isLink":true,"height":"230px","style":{"border":{"radius":"20px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-categories-background-with-round is-style-categories-background primary-color-green"} /-->

                            <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"#1a9763"}}}},"spacing":{"margin":{"top":"7px"}},"typography":{"fontSize":"26px","lineHeight":"1.2"}},"fontFamily":"jost"} /-->

                            <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-author-name-with-icon","fontSize":"x-small"} /-->

                                <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","className":"is-style-post-date-with-icon","fontSize":"x-small"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-excerpt {"excerptLength":21} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-box-background"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
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
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"20px"}},"border":{"radius":"20px","color":"#1a966229","width":"1px"}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":""}} -->
                <div class="wp-block-group magnewspresss-group-hover has-border-color has-box-background-background-color has-background" style="border-color:#1a966229;border-width:1px;border-radius:20px;margin-top:0;margin-bottom:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|header-color","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"style":"none","width":"0px"},"spacing":{"padding":{"bottom":"10px","top":"10px","right":"30px","left":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}},"color":{"background":"#1a9763"}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group has-box-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#1a9763;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"medium","fontFamily":"jost"} -->
                            <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-jost-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('About Author', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"16px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"id":7090,"width":"140px","height":"140px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
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

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"24px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"20px","color":"#1a966229","width":"1px"},"dimensions":{"minHeight":"2px"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
                <div class="wp-block-group magnewspresss-group-hover has-border-color has-light-color-background-color has-background" style="border-color:#1a966229;border-width:1px;border-radius:20px;min-height:2px;margin-top:24px;margin-bottom:24px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":{},"right":{},"left":{}},"spacing":{"padding":{"bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|header-color","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"style":"none","width":"0px"},"spacing":{"padding":{"bottom":"10px","top":"10px","right":"30px","left":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}},"color":{"background":"#1a9763"}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                            <div class="wp-block-group has-box-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#1a9763;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"medium","fontFamily":"jost"} -->
                                <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-jost-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Social Media', 'magnewspress') ?></h5>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:social-links {"showLabels":true,"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}},"className":"magnewspress-sidebar-social is-style-logos-only"} -->
                        <ul class="wp-block-social-links has-visible-labels magnewspress-sidebar-social is-style-logos-only" style="margin-top:16px;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->

                            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                            <!-- wp:social-link {"url":"#","service":"telegram"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"20px"}}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group magnewspresss-group-hover has-box-background-background-color has-background" style="margin-top:0;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":8273,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":"20px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($magnewspress_images[1]) ?>" alt="" class="wp-image-8273" style="border-radius:20px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"20px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"20px","color":"#1a966229","width":"1px"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
                <div class="wp-block-group magnewspresss-group-hover has-border-color has-light-color-background-color has-background" style="border-color:#1a966229;border-width:1px;border-radius:20px;margin-top:0px;margin-bottom:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|header-color","width":"1px"}},"spacing":{"margin":{"bottom":"6px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px;margin-bottom:6px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"style":"none","width":"0px"},"spacing":{"padding":{"bottom":"10px","top":"10px","right":"30px","left":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}},"color":{"background":"#1a9763"}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group has-box-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#1a9763;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"medium","fontFamily":"jost"} -->
                            <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-jost-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Categories', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style is-style-magnewspress-categories-bullet-hide-style magnewspress-sidebar-cat","style":{"typography":{"lineHeight":"2"}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"20px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"20px","color":"#1a966229","width":"1px"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
                <div class="wp-block-group magnewspresss-group-hover has-border-color has-light-color-background-color has-background" style="border-color:#1a966229;border-width:1px;border-radius:20px;margin-top:0px;margin-bottom:20px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|header-color","width":"1px"}},"spacing":{"margin":{"bottom":"16px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px;margin-bottom:16px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"100px"},"style":"none","width":"0px"},"spacing":{"padding":{"bottom":"10px","top":"10px","right":"30px","left":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}},"color":{"background":"#1a9763"}},"textColor":"box-background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group has-box-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:100px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#1a9763;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"medium","fontFamily":"jost"} -->
                            <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-jost-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Tags', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:tag-cloud {"smallestFontSize":"10pt","largestFontSize":"10pt","className":"magnewspress-sidebar-tags","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
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