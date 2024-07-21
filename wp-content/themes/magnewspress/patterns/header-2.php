<?php

/**
 * Title: Header 2
 * Slug: magnewspress/header-2
 * Categories: magnewspress, header
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/banner_ads_2.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Header"},"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"magnewspress-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group magnewspress-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#1a9763"}},"layout":{"type":"constrained","contentSize":"1340px"}} -->
    <div class="wp-block-group has-background" style="background-color:#1a9763;padding-top:12px;padding-right:var(--wp--preset--spacing--40);padding-bottom:12px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"80%","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
            <div class="wp-block-column is-vertically-aligned-center has-light-color-color has-text-color has-link-color" style="flex-basis:80%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"10px"}},"layout":{"selfStretch":"fixed","flexSize":"160px"},"border":{"right":{"color":"var:preset|color|box-background","width":"1px"}}},"className":"newsticker-heading","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group newsticker-heading" style="border-right-color:var(--wp--preset--color--box-background);border-right-width:1px;padding-right:10px"><!-- wp:html {"metadata":{"name":"magpressnews-pulse-icon"}} -->
                        <div id="mnpblinker">
                            <div class="mnpdot"></div>
                            <div class="mnppulse"></div>
                        </div>
                        <!-- /wp:html -->

                        <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"normal","fontFamily":"jost"} -->
                        <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-jost-font-family has-normal-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Breaking News', 'magnewspress') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:query {"queryId":14,"query":{"perPage":"7","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"magnewspress-ticker"} -->
                    <div class="wp-block-query magnewspress-ticker"><!-- wp:post-template {"className":"swiper-wrapper magnewspress-swiper-holder","layout":{"type":"default","columnCount":2}} -->
                        <!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontFamily":"public-sans"} /-->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:social-links {"iconColor":"dark-shade","iconColorValue":"#05193A","iconBackgroundColor":"box-background","iconBackgroundColorValue":"#FFFFFF","metadata":{"name":""},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-default maganewspress-header-social"} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default maganewspress-header-social"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                        <!-- wp:social-link {"url":"#","service":"telegram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"light-color","isUserOverlayColor":true,"minHeight":160,"isDark":false,"layout":{"type":"constrained","contentSize":"1340px"}} -->
        <div class="wp-block-cover is-light" style="min-height:160px"><span aria-hidden="true" class="wp-block-cover__background has-light-color-background-color has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontStyle":"normal","fontWeight":"200"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="font-style:normal;font-weight:200"><!-- wp:site-logo {"width":334,"shouldSyncIcon":false,"style":{"color":{"duotone":["#ffffff","#1a9763"]}}} /-->

                            <!-- wp:site-title {"fontSize":"xxx-large","fontFamily":"public-sans"} /-->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><?php echo esc_html_e('Globe’s most trusted news site', 'magnewspress') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
                    <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:image {"id":9629,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($magnewspress_images[0]) ?>" alt="" class="wp-image-9629" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":{"style":"none","width":"0px"},"left":[]},"color":{"background":"#1a9763"}},"layout":{"type":"constrained","contentSize":"1340px"}} -->
    <div class="wp-block-group has-background" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;background-color:#1a9763;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:navigation {"ref":8043,"textColor":"light-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"magnewspress-navigation is-style-magnewspress-nav-secondaryunderline-onhover","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2.3"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:navigation {"ref":8044,"overlayMenu":"always","className":"magnewspress-nav-search","layout":{"type":"flex","justifyContent":"center"}} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->