<?php

/**
 * Title: Featured Categories 3
 * Slug: magnewspress/featured-categories-3
 * Categories: magnewspress
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/cat_lifestyle.jpg',
    $magnewspress_url . 'assets/images/cat_travel.jpg',
    $magnewspress_url . 'assets/images/cat_technology.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[0]) ?>","id":5639,"isUserOverlayColor":true,"minHeight":240,"gradient":"dark-gradient-btm","style":{"border":{"radius":"0px"}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="border-radius:0px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-btm-gradient-background"></span><img class="wp-block-cover__image-background wp-image-5639" alt="" src="<?php echo esc_url($magnewspress_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"light-color","fontSize":"large","fontFamily":"dm-serif-display"} -->
                    <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-dm-serif-display-font-family has-large-font-size"><a href="#"><?php esc_html_e('Life Style', 'magnewspress') ?></a></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[1]) ?>","id":3420,"isUserOverlayColor":true,"minHeight":240,"gradient":"dark-gradient-btm","style":{"border":{"radius":"0px"}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="border-radius:0px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-btm-gradient-background"></span><img class="wp-block-cover__image-background wp-image-3420" alt="" src="<?php echo esc_url($magnewspress_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#971a83"}}}}},"textColor":"light-color","fontSize":"large","fontFamily":"dm-serif-display"} -->
                    <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-dm-serif-display-font-family has-large-font-size"><a href="#"><?php esc_html_e('Travel', 'magnewspress') ?></a>
                    </h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($magnewspress_images[2]) ?>","id":6257,"isUserOverlayColor":true,"minHeight":240,"gradient":"dark-gradient-btm","style":{"border":{"radius":"0px"}},"className":"magnewspress-translate-cover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="border-radius:0px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-btm-gradient-background"></span><img class="wp-block-cover__image-background wp-image-6257" alt="" src="<?php echo esc_url($magnewspress_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"#1a9763"}}}}},"textColor":"light-color","fontSize":"large","fontFamily":"dm-serif-display"} -->
                    <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-dm-serif-display-font-family has-large-font-size"><a href="#"><?php esc_html_e('Technology', 'magnewspress') ?></a>
                    </h3>
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