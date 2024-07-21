<?php

/**
 * Title: Trending Tag List 2
 * Slug: magnewspress/trending-tag-2
 * Categories: magnewspress
 */
$magnewspress_url = trailingslashit(get_template_directory_uri());
$magnewspress_images = array(
    $magnewspress_url . 'assets/images/trending_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-right:var(--wp--preset--spacing--40);padding-bottom:16px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:image {"id":8071,"width":"auto","height":"36px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a9763","#ffffff"]}}} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($magnewspress_images[0]) ?>" alt="" class="wp-image-8071" style="width:auto;height:36px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontFamily":"jost"} -->
            <h5 class="wp-block-heading has-jost-font-family" style="font-style:normal;font-weight:500"><?php esc_html_e('Trending Tags', 'magnewspress') ?></h5>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:tag-cloud {"numberOfTags":7,"smallestFontSize":"12pt","largestFontSize":"12pt","className":"magnewspress-trending-tags","style":{"typography":{"textTransform":"none"}}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->