<?php

/**
 * Title: Footer 3
 * Slug: magnewspress/footer-3
 * Categories: magnewspress, footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#130010"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-background" style="background-color:#130010;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"color":"#ffffff30","width":"1px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
            <div class="wp-block-column has-border-color" style="border-color:#ffffff30;border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px","bottom":"16px"}},"border":{"left":{"width":"0px","style":"none"},"bottom":{"color":"#ffffff30","width":"1px"},"top":{},"right":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="border-bottom-color:#ffffff30;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"big","fontFamily":"playfair-display"} -->
                    <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-playfair-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('About Us', 'magnewspress') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'magnewspress') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"color":"#ffffff30","width":"1px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
            <div class="wp-block-column has-border-color" style="border-color:#ffffff30;border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px","bottom":"16px"}},"border":{"left":{"width":"0px","style":"none"},"bottom":{"color":"#ffffff30","width":"1px"},"top":{},"right":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="border-bottom-color:#ffffff30;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"big","fontFamily":"playfair-display"} -->
                    <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-playfair-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Latest Articles', 'magnewspress') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":30,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:post-featured-image {"isLink":true,"height":"100px"} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"10px"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px","lineHeight":"1.3"}},"fontFamily":"playfair-display"} /-->

                            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"color":"#ffffff30","width":"1px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
            <div class="wp-block-column has-border-color" style="border-color:#ffffff30;border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px","bottom":"16px"}},"border":{"left":{"width":"0px","style":"none"},"bottom":{"color":"#ffffff30","width":"1px"},"top":{},"right":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="border-bottom-color:#ffffff30;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"box-background","fontSize":"big","fontFamily":"playfair-display"} -->
                    <h5 class="wp-block-heading has-box-background-color has-text-color has-link-color has-playfair-display-font-family has-big-font-size" style="font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Categories', 'magnewspress') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:categories {"showPostCounts":true,"className":"is-style-magnewspress-categories-bullet-hide-style magnewspress-footer-categories","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"24px"}}}} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"40px"}},"border":{"top":{"color":"#ffffff30","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-color:#ffffff30;border-top-width:1px;margin-top:40px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
            <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Proudly powered by WordPress | MagnewsPress by', 'magnewspress') ?> <a href="https://cozythemes.com/" target="_blank" rel="noreferrer noopener"><?php esc_html_e('CozyThemes', 'magnewspress') ?></a>.</p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"customIconColor":"#971a83","iconColorValue":"#971a83","iconBackgroundColor":"box-background","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
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
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"magnewspress-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button magnewspress-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'magnewspress') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->