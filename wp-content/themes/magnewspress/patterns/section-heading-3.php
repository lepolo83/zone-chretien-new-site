<?php

/**
 * Title: Section Heading Style 3
 * Slug: magnewspress/section-heading-3
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"16px"}},"border":{"left":{"color":"var:preset|color|primary","width":"3px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;margin-top:0;margin-bottom:0;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1"}},"fontSize":"big"} -->
    <h5 class="wp-block-heading has-big-font-size" style="line-height:1"><?php esc_html_e('Today\'s Stories', 'magnewspress') ?></h5>
    <!-- /wp:heading -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('View All', 'magnewspress') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->