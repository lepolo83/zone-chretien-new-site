<?php

/**
 * Title: Section Heading Style 7
 * Slug: magnewspress/section-heading-7
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0px","bottom":"15px","top":"15px"}},"border":{"left":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|header-color","width":"1px"},"top":{"color":"var:preset|color|heading-color","width":"2px"},"right":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:2px;border-bottom-color:var(--wp--preset--color--header-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:15px;padding-bottom:15px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1"}},"fontSize":"big"} -->
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