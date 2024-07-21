<?php

/**
 * Title: About Us Page 
 * Slug: magnewspress/aboutus-page
 * Categories: magnewspress-about
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/about_image_1.jpg',
    $magnewspress_url . 'assets/images/about_image_2.jpg',
    $magnewspress_url . 'assets/images/team_1.jpg',
    $magnewspress_url . 'assets/images/team_2.jpg',
    $magnewspress_url . 'assets/images/team_3.jpg',
    $magnewspress_url . 'assets/images/logo-blue.png'
);
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group has-box-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"60px","left":"60px"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php esc_html_e('About Us', 'magnewspress') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Don’t bother typing “lorem ipsum” into Google translate. If you already tried, you may have gotten&nbsp;anything from “NATO” to “China”, depending on how you capitalized the letters. The bizarre translation was fodder for conspiracy theories, but Google has since updated its “lorem ipsum” translation to, boringly enough, “lorem ipsum”.', 'magnewspress') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('One brave soul did take a stab at translating the almost-not-quite-Latin. According to&nbsp;The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text “precisely as incoherent in English as it is in Latin – and to make it incoherent in the same way”. As a result, “the Greek ‘eu’ in Latin became the French ‘bien’ […] and the ‘-ing’ ending in ‘lorem ipsum’ seemed best rendered by an ‘-iendum’ in English.”', 'magnewspress') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7735,"sizeSlug":"large","linkDestination":"none"} -->
                        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($magnewspress_images[0]) ?>" alt="" class="wp-image-7735" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"60px","left":"60px"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7735,"sizeSlug":"large","linkDestination":"none"} -->
                        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($magnewspress_images[1]) ?>" alt="" class="wp-image-7735" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php esc_html_e('Mission &amp; Goal', 'magnewspress') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Don’t bother typing “lorem ipsum” into Google translate. If you already tried, you may have gotten&nbsp;anything from “NATO” to “China”, depending on how you capitalized the letters. The bizarre translation was fodder for conspiracy theories, but Google has since updated its “lorem ipsum” translation to, boringly enough, “lorem ipsum”.', 'magnewspress') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('One brave soul did take a stab at translating the almost-not-quite-Latin. According to&nbsp;The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text “precisely as incoherent in English as it is in Latin – and to make it incoherent in the same way”. As a result, “the Greek ‘eu’ in Latin became the French ‘bien’ […] and the ‘-ing’ ending in ‘lorem ipsum’ seemed best rendered by an ‘-iendum’ in English.', 'magnewspress') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group has-box-background-background-color has-background" style="margin-top:20px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                <h4 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Meet Our Team', 'magnewspress') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:columns {"style":{"spacing":{"margin":{"top":"20px"},"blockGap":{"left":"16px"}}}} -->
                <div class="wp-block-columns" style="margin-top:20px"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"16px","right":"16px"}},"border":{"width":"1px"}},"borderColor":"border-color","className":"homedroid-team-box","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group homedroid-team-box has-border-color has-border-color-border-color" style="border-width:1px;padding-top:30px;padding-right:16px;padding-bottom:30px;padding-left:16px"><!-- wp:image {"id":467,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"200px"}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($magnewspress_images[2]) ?>" alt="" class="wp-image-467" style="border-radius:200px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium","fontFamily":"public-sans"} -->
                                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-public-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Alex Porel', 'magnewspress') ?></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Founder', 'magnewspress') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"meta-color","iconColorValue":"#636363","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"12px"}}},"className":"is-style-logos-only"} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:12px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                                    <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                                </ul>
                                <!-- /wp:social-links -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"16px","right":"16px"}},"border":{"width":"1px"}},"borderColor":"border-color","className":"homedroid-team-box","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group homedroid-team-box has-border-color has-border-color-border-color" style="border-width:1px;padding-top:30px;padding-right:16px;padding-bottom:30px;padding-left:16px"><!-- wp:image {"id":466,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"200px"}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($magnewspress_images[3]) ?>" alt="" class="wp-image-466" style="border-radius:200px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium","fontFamily":"public-sans"} -->
                                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-public-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Liyana T', 'magnewspress') ?></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Founder', 'magnewspress') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"meta-color","iconColorValue":"#636363","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"12px"}}},"className":"is-style-logos-only"} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:12px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                                    <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                                </ul>
                                <!-- /wp:social-links -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"16px","right":"16px"}},"border":{"width":"1px"}},"borderColor":"border-color","className":"homedroid-team-box","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group homedroid-team-box has-border-color has-border-color-border-color" style="border-width:1px;padding-top:30px;padding-right:16px;padding-bottom:30px;padding-left:16px"><!-- wp:image {"id":459,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"200px"}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($magnewspress_images[4]) ?>" alt="" class="wp-image-459" style="border-radius:200px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium","fontFamily":"public-sans"} -->
                                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-public-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'magnewspress') ?></h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Founder', 'magnewspress') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"meta-color","iconColorValue":"#636363","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"12px"}}},"className":"is-style-logos-only"} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:12px"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                                    <!-- wp:social-link {"url":"#","service":"spotify"} /-->
                                </ul>
                                <!-- /wp:social-links -->
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

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"box-background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-box-background-background-color has-background" style="margin-top:20px;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":8022,"width":"200px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-duo"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($magnewspress_images[5]) ?>" alt="" class="wp-image-8022" style="width:200px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Phone', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"textDecoration":"underline"}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="text-decoration:underline"><?php esc_html_e('(888) 012-4567', 'magnewspress') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Email', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"textDecoration":"underline"}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="text-decoration:underline"><?php esc_html_e('email@example.com', 'magnewspress') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Address', 'magnewspress') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('123 Main Street<br>Suite 200 Anywhere, USA 44600', 'magnewspress') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"16px","right":"16px"}}},"borderColor":"header-color"} -->
                    <div class="wp-block-column has-border-color has-header-color-border-color" style="border-width:1px;padding-top:0px;padding-right:16px;padding-bottom:0px;padding-left:16px"><!-- wp:contact-form-7/contact-form-selector {"id":1125,"hash":"437634c","title":"Contact form 1"} -->
                        <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="437634c" title="Contact form 1"]</div>
                        <!-- /wp:contact-form-7/contact-form-selector -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"27%"} -->
        <div class="wp-block-column" style="flex-basis:27%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"16px"},"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"magnewspresss-group-hover","layout":{"type":"constrained"}} -->
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

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"20px"}}},"backgroundColor":"box-background","className":"magnewspresss-group-hover","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group magnewspresss-group-hover has-box-background-background-color has-background" style="margin-top:0;margin-bottom:20px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:heading {"level":4,"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-big-font-size">A<?php esc_html_e('bout Author', 'magnewspress') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"16px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"second-box-background","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-second-box-background-background-color has-background" style="margin-top:16px;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"id":7090,"width":"140px","height":"140px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($magnewspress_images[3]) ?>" alt="" class="wp-image-7090" style="border-radius:100px;object-fit:cover;width:140px;height:140px" /></figure>
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
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->