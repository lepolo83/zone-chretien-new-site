<?php

/**
 * Title: Footer 4
 * Slug: magnewspress/footer-4
 * Categories: magnewspress, footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#141313"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-background" style="background-color:#141313;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"30%","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="border-style:none;border-width:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:30%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px","bottom":"16px"}},"border":{"left":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"top":{},"right":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"big","fontFamily":"public-sans"} -->
                    <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-public-sans-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Latest Articles', 'magnewspress') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":30,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"90px"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90px"><!-- wp:post-featured-image {"isLink":true,"height":"90px","style":{"border":{"radius":"90px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"10px"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px","lineHeight":"1.3"}},"fontFamily":"public-sans"} /-->

                            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tag-bg-color"}}}},"textColor":"tag-bg-color"} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"20%","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="border-style:none;border-width:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:20%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px","bottom":"16px"}},"border":{"left":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"top":{},"right":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"light-color","fontSize":"big","fontFamily":"public-sans"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-public-sans-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Categories', 'magnewspress') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:categories {"showPostCounts":true,"className":"is-style-magnewspress-categories-bullet-hide-style magnewspress-footer-categories","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"24px"}}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="border-style:none;border-width:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:social-links {"iconColor":"box-background","iconColorValue":"#FFFFFF","customIconBackgroundColor":"#20b6c8","iconBackgroundColorValue":"#20b6c8","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"40px"}},"border":{"top":{"color":"#ffffff1c","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-color:#ffffff1c;border-top-width:1px;margin-top:40px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"box-background"} -->
            <p class="has-box-background-color has-text-color has-link-color"><?php esc_html_e('Proudly powered by WordPress | MagnewsPress by', 'magnewspress') ?> <a href="https://cozythemes.com/" target="_blank" rel="noreferrer noopener"><?php esc_html_e('CozyThemes', 'magnewspress') ?></a>.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"magnewspress-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button magnewspress-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'magnewspress') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->