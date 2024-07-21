<?php

/**
 * Title: Section Heading Style 1
 * Slug: magnewspress/section-heading-1
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"16px","top":"12px","bottom":"12px","right":"16px"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1"}},"fontSize":"medium"} -->
    <h5 class="wp-block-heading has-medium-font-size" style="line-height:1"><?php esc_html_e('Today\'s Stories', 'magnewspress') ?></h5>
    <!-- /wp:heading -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
        <div class="wp-block-button is-style-button-hover-secondary-color"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('View All', 'magnewspress') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->