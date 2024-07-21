<?php

/**
 * Title: Footer Default
 * Slug: magnewspress/footer-default
 * Categories: magnewspress, footer
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/logo-white.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"0","left":"0","bottom":"40px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"dark-shade","className":"magnewspress-footer","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group magnewspress-footer has-dark-shade-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"40px"}}}} -->
        <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"width":"30%","className":"magnewspress-footer-list"} -->
            <div class="wp-block-column magnewspress-footer-list" style="flex-basis:30%"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column {"width":"85%"} -->
                    <div class="wp-block-column" style="flex-basis:85%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group" style="padding-right:20px"><!-- wp:image {"id":8049,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($magnewspress_images[0]) ?>" alt="" class="wp-image-8049" style="object-fit:cover" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"light-color","fontSize":"small"} -->
                                <p class="has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e('Globe’s most trusted news site', 'magnewspress') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'magnewspress') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"className":"magnewspress-footer-social is-style-default"} -->
                        <ul class="wp-block-social-links magnewspress-footer-social is-style-default" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->

                            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                            <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"15%"} -->
                    <div class="wp-block-column" style="flex-basis:15%"></div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"magnewspress-footer-list"} -->
            <div class="wp-block-column magnewspress-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Company', 'magnewspress') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.1","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.1;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About Us', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Privacy Policy', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Terms and Conditions', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Subscribe Newsletter', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Advertise with Us', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Sitemap', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Send us feedback', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Contact Us', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"magnewspress-footer-list"} -->
            <div class="wp-block-column magnewspress-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Services', 'magnewspress') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.1","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.1;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Weekly Subscription', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Membership', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Business Model', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Contact Us', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"magnewspress-footer-list"} -->
            <div class="wp-block-column magnewspress-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Products', 'magnewspress') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.1","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.1;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Weekly Magazine', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Monthly Magazine', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Diva Publication', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Economic News', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Fashion Magazine', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('MNP Book', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('MNP Press', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Modeling Show', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('MNP Newsfeed', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('MNP Advisor', 'magnewspress') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":""} -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Contact Us', 'magnewspress') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"0"},"padding":{"left":"4px"}}},"className":"magnewspress-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group magnewspress-footer-list" style="margin-bottom:0;padding-left:4px"><!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"medium"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:500;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-medium-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                        <li class="has-small-font-size"><a href="#"><?php esc_html_e('+1 (012) 345-6780', 'magnewspress') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                        <li class="has-normal-font-size"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'magnewspress') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                        <li class="has-normal-font-size"><a href="#"><?php esc_html_e('email@example.com', 'magnewspress') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"44px","bottom":"0"},"padding":{"left":"5px"}}},"className":"magnewspress-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group magnewspress-footer-list" style="margin-top:44px;margin-bottom:0;padding-left:5px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Office Hour', 'magnewspress') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color","className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-light-color-color has-text-color has-link-color has-normal-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                        <li class="has-small-font-size"><?php esc_html_e('Monday - Friday8:00 a.m. - 5:00 p.m.', 'magnewspress') ?></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"},"padding":{"top":"30px","bottom":"10px"},"blockGap":"var:preset|spacing|70"},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:60px;padding-top:30px;padding-bottom:10px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"1.5"}},"textColor":"light-color","fontSize":"normal"} -->
            <p class="has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | MagnewsPress by', 'magnewspress') ?> <a href="https://cozythemes.com/" target="_blank" rel="noreferrer noopener"><?php esc_html_e('CozyThemes', 'magnewspress') ?></a>.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"magnewspress-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
    <div class="wp-block-button magnewspress-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'magnewspress') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->