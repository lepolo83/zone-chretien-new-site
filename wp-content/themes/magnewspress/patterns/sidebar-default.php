<?php

/**
 * Title: Sidebar Default
 * Slug: magnewspress/sidebar-default
 * Categories: magnewspress
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/team_1.jpg',
    $magnewspress_url . 'assets/images/sidebar_ads.jpg',
);
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"20px"}}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-box-background-background-color has-background" style="margin-top:0;margin-bottom:20px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:heading {"level":4,"fontSize":"big"} -->
        <h4 class="wp-block-heading has-big-font-size"><?php esc_html_e('About Author', 'magnewspress') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"16px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"second-box-background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-second-box-background-background-color has-background" style="margin-top:16px;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"id":7090,"width":"140px","height":"140px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($magnewspress_images[0]) ?>" alt="" class="wp-image-7090" style="border-radius:100px;object-fit:cover;width:140px;height:140px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <h4 class="wp-block-heading has-text-align-center" style="margin-top:24px"><?php esc_html_e('Alex Lorel', 'magnewspress') ?></h4>
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

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"20px"}}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-box-background-background-color has-background" style="margin-top:0;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":8273,"sizeSlug":"full","linkDestination":"none","align":"full"} -->
        <figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url($magnewspress_images[1]) ?>" alt="" class="wp-image-8273" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"16px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;margin-bottom:16px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest Posts', 'magnewspress') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"inherit":false}} -->
                <div class="wp-block-group" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"16px","left":"16px"},"padding":{"top":"16px","bottom":"16px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}}} -->
                    <div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:16px;padding-bottom:16px"><!-- wp:column {"width":"90px"} -->
                        <div class="wp-block-column" style="flex-basis:90px"><!-- wp:post-featured-image {"height":"70px","style":{"border":{"radius":"0px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"0"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"}},"textColor":"heading-color","className":"is-style-default","fontSize":"normal"} /-->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
                                <div class="wp-block-group has-x-small-font-size" style="margin-top:0;margin-bottom:0;padding-bottom:0"><!-- wp:post-date {"fontSize":"xx-small"} /-->

                                    <!-- wp:paragraph -->
                                    <p>.</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:post-author-name {"fontSize":"xx-small"} /-->
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
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"16px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;margin-bottom:16px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Follow Us On Social Media', 'magnewspress') ?></h4>
            <!-- /wp:heading -->

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

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"16px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;margin-bottom:16px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Editor\'s Picks', 'magnewspress') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"second-box-background","layout":{"inherit":false}} -->
                <div class="wp-block-group has-second-box-background-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:post-featured-image {"height":"120px","style":{"border":{"radius":"0px"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"0"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"}},"textColor":"heading-color","className":"is-style-default","fontSize":"normal"} /-->

                        <!-- wp:post-date {"style":{"typography":{"fontSize":"12px"}}} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"20px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;margin-bottom:20px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"8px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:8px;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Categories', 'magnewspress') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style is-style-magnewspress-categories-bullet-hide-style magnewspress-sidebar-cat","style":{"typography":{"lineHeight":"2"}}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"20px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
    <div class="wp-block-group magnewspresss-group-hover has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;margin-bottom:20px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"8px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:8px;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Tags', 'magnewspress') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:tag-cloud {"smallestFontSize":"10pt","largestFontSize":"10pt","className":"magnewspress-sidebar-tags","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->