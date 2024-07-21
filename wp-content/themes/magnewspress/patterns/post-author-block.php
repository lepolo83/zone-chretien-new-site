<?php

/**
 * Title: Author Horizontal Block
 * Slug: magnewspress/post-author-block
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"17px","right":"17px"}}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-box-background-background-color has-background" style="padding-top:16px;padding-right:17px;padding-bottom:16px;padding-left:17px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"10px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-bottom:10px"><!-- wp:heading {"level":4,"fontSize":"big"} -->
        <h4 class="wp-block-heading has-big-font-size"><?php esc_html_e('About the Author', 'magnewspress') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"top"} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"134px"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:134px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}},"border":{"radius":"100px","width":"2px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:2px;border-radius:100px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:avatar {"size":100,"style":{"border":{"radius":"100px"}}} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:post-author-name {"fontFamily":"ibm-plex-serif"} /-->

            <!-- wp:post-author-biography /-->

            <!-- wp:social-links {"iconColor":"box-background","iconColorValue":"#FFFFFF","iconBackgroundColor":"primary","iconBackgroundColorValue":"#0047B3","style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-default"} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"spotify"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->