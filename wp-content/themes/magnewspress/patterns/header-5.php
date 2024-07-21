<?php

/**
 * Title: Header 5
 * Slug: magnewspress/header-5
 * Categories: magnewspress, header
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/banner_image_5.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Header"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0px","bottom":"0px"}},"dimensions":{"minHeight":""},"border":{"bottom":{"width":"0px","style":"none"},"top":{},"right":{},"left":{}}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-box-background-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[0]) ?>","id":10074,"dimRatio":0,"isUserOverlayColor":true,"minHeight":410,"customGradient":"linear-gradient(299deg,rgba(0,0,0,0) 0%,rgb(100,28,255) 100%)","layout":{"type":"constrained"}} -->
        <div class="wp-block-cover" style="min-height:410px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient" style="background:linear-gradient(299deg,rgba(0,0,0,0) 0%,rgb(100,28,255) 100%)"></span><img class="wp-block-cover__image-background wp-image-10074" alt="" src="<?php echo esc_url($magnewspress_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Site...","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"#641cff"}}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"text":"#641cff"}},"backgroundColor":"transparent"} /--></div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#641cff"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"68px","textTransform":"uppercase"}},"fontFamily":"jost"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:social-links {"customIconColor":"#641cff","iconColorValue":"#641cff","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"right"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#641cff","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"#641cff","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-top-color:#641cff;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:#641cff;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:navigation {"ref":6399,"icon":"menu","className":"magnewspress-navigation is-style-magnewspress-nav-secondarycolor-onhover","layout":{"type":"flex","justifyContent":"center"}} /--></div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->