<?php

/**
 * Title: Featured Categories 4
 * Slug: magnewspress/featured-categories-4
 * Categories: magnewspress
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/cat_lifestyle.jpg',
    $magnewspress_url . 'assets/images/cat_travel.jpg',
    $magnewspress_url . 'assets/images/cat_technology.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|header-color","width":"1px"}},"spacing":{"padding":{"bottom":"36px"}}}} -->
    <div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px;padding-bottom:36px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[0]) ?>","id":5639,"isUserOverlayColor":true,"minHeight":280,"gradient":"dark-gradient-btm","style":{"border":{"radius":"0px"}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="border-radius:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-btm-gradient-background"></span><img class="wp-block-cover__image-background wp-image-5639" alt="" src="<?php echo esc_url($magnewspress_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#00acc1"}}}}},"textColor":"light-color","fontSize":"large","fontFamily":"public-sans"} -->
                    <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-public-sans-font-family has-large-font-size"><a href="#"><?php esc_html_e('Life Style', 'magnewspress') ?></a></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[1]) ?>","id":3420,"isUserOverlayColor":true,"minHeight":280,"gradient":"dark-gradient-btm","style":{"border":{"radius":"0px"}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="border-radius:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-btm-gradient-background"></span><img class="wp-block-cover__image-background wp-image-3420" alt="" src="<?php echo esc_url($magnewspress_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#00acc1"}}}}},"textColor":"light-color","fontSize":"large","fontFamily":"public-sans"} -->
                    <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-public-sans-font-family has-large-font-size"><a href="#"><?php esc_html_e('Travel', 'magnewspress') ?></a></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[2]) ?>","id":6257,"isUserOverlayColor":true,"minHeight":280,"gradient":"dark-gradient-btm","style":{"border":{"radius":"0px"}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="border-radius:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-btm-gradient-background"></span><img class="wp-block-cover__image-background wp-image-6257" alt="" src="<?php echo esc_url($magnewspress_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#00acc1"}}}}},"textColor":"light-color","fontSize":"large","fontFamily":"public-sans"} -->
                    <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-public-sans-font-family has-large-font-size"><a href="#"><?php esc_html_e('Technology', 'magnewspress') ?></a></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->