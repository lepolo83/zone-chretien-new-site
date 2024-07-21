<?php

/**
 * Title: Header Default
 * Slug: magnewspress/header-default
 * Categories: magnewspress, header
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/banner_image_1.jpg',
    $magnewspress_url . 'assets/images/banner_ads_1.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"magnewspress-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group magnewspress-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1400px"}} -->
    <div class="wp-block-group has-dark-shade-background-color has-background" style="padding-top:12px;padding-right:var(--wp--preset--spacing--40);padding-bottom:12px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"80%","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
            <div class="wp-block-column is-vertically-aligned-center has-light-color-color has-text-color has-link-color" style="flex-basis:80%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"10px"}},"layout":{"selfStretch":"fixed","flexSize":"160px"},"border":{"right":{"color":"var:preset|color|box-background","width":"1px"}}},"className":"newsticker-heading","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group newsticker-heading" style="border-right-color:var(--wp--preset--color--box-background);border-right-width:1px;padding-right:10px"><!-- wp:html -->
                        <div id="mnpblinker">
                            <div class="mnpdot"></div>
                            <div class="mnppulse"></div>
                        </div>
                        <!-- /wp:html -->

                        <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"normal"} -->
                        <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Breaking News', 'magnewspress') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:query {"queryId":14,"query":{"perPage":"7","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"magnewspress-ticker"} -->
                    <div class="wp-block-query magnewspress-ticker"><!-- wp:post-template {"className":"swiper-wrapper magnewspress-swiper-holder","layout":{"type":"default","columnCount":2}} -->
                        <!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"left":"0px"}}},"fontFamily":"public-sans"} /-->
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
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[0]) ?>","id":8034,"dimRatio":70,"overlayColor":"dark-shade","isUserOverlayColor":true,"minHeight":160,"layout":{"type":"constrained","contentSize":"1400px"}} -->
        <div class="wp-block-cover" style="min-height:160px"><span aria-hidden="true" class="wp-block-cover__background has-dark-shade-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-8034" alt="" src="<?php echo esc_url($magnewspress_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontStyle":"normal","fontWeight":"200"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="font-style:normal;font-weight:200"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

                            <!-- wp:site-title {"fontSize":"xxx-large","fontFamily":"public-sans"} /-->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><?php esc_html_e('Globe’s most trusted news site', 'magnewspress') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
                    <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:image {"id":8018,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($magnewspress_images[1]) ?>" alt="" class="wp-image-8018" /></figure>
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

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":{"style":"none","width":"0px"},"left":[]}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1400px"}} -->
    <div class="wp-block-group has-dark-shade-background-color has-background" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"magnewspress-navigation is-style-magnewspress-nav-primarybg-onhover","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:navigation {"ref":8044,"overlayMenu":"always","className":"magnewspress-nav-search","layout":{"type":"flex","justifyContent":"center"}} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->