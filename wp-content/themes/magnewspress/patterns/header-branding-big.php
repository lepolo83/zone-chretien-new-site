<?php

/**
 * Title: Header with Big Logo Center
 * Slug: magnewspress/header-branding-big
 * Categories: magnewspress, header
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/banner_image_5.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Header"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[0]) ?>","id":10074,"dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":180,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:180px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10074" alt="" src="<?php echo esc_url($magnewspress_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontSize":"84px"}},"fontFamily":"oswald"} /--></div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="padding-top:0px;padding-bottom:0px"><!-- wp:navigation {"ref":6399,"textColor":"box-background","overlayBackgroundColor":"background","overlayTextColor":"heading-color","className":"magnewspress-navigation","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"textTransform":"uppercase"}},"fontSize":"normal","fontFamily":"oswald"} /-->

            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0047B3","iconBackgroundColor":"box-background","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->