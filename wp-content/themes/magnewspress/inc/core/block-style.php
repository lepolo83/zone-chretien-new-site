<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package magnewspress
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function magnewspress_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'magnewspress-boxshadow',
                'label' => __('Box Shadow', 'magnewspress')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'magnewspress-boxshadow',
                'label' => __('Box Shadow', 'magnewspress')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'magnewspress-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'magnewspress')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'magnewspress-boxshadow-large',
                'label' => __('Box Shadow Large', 'magnewspress')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'magnewspress-boxshadow',
                'label' => __('Box Shadow', 'magnewspress')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'magnewspress-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'magnewspress')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'magnewspress-boxshadow-large',
                'label' => __('Box Shadow Larger', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-boxshadow',
                'label' => __('Box Shadow', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-boxshadow-larger',
                'label' => __('Box Shadow Large', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-image-pulse',
                'label' => __('Iamge Pulse Effect', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'magnewspress')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'magnewspress-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'magnewspress')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'magnewspress-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'magnewspress')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'magnewspress-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'magnewspress')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'magnewspress-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'magnewspress')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background',
                'label' => __('Background', 'magnewspress')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'magnewspress')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'magnewspress')
            )
        );
        register_block_style(
            'core/post-author-name',
            array(
                'name'  => 'author-name-with-icon',
                'label' => __('With Icon', 'magnewspress')
            )
        );
        register_block_style(
            'core/post-author-name',
            array(
                'name'  => 'author-name-with-white-icon',
                'label' => __('With White Icon', 'magnewspress')
            )
        );
        register_block_style(
            'core/post-date',
            array(
                'name'  => 'post-date-with-icon',
                'label' => __('With Icon', 'magnewspress')
            )
        );
        register_block_style(
            'core/post-date',
            array(
                'name'  => 'post-date-with-white-icon',
                'label' => __('With White Icon', 'magnewspress')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'magnewspress')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'magnewspress')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'magnewspress')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'magnewspress')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'magnewspress')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'magnewspress')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'magnewspress')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'magnewspress')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'magnewspress')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'magnewspress')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'magnewspress')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'magnewspress')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'magnewspress')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'magnewspress-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'magnewspress')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'magnewspress-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'magnewspress')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'magnewspress-cover-round-style',
                'label' => __('Round Corner Style', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-primarybg-onhover',
                'label' => __('Primary Background On Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-secondarybg-onhover',
                'label' => __('Secondary Background On Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-primarycolor-onhover',
                'label' => __('Primary Color On Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-secondarycolor-onhover',
                'label' => __('Secondary Color On Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-whitebg-onhover',
                'label' => __('White Background On Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-primaryunderline-onhover',
                'label' => __('Primary Underline On Hover', 'magnewspress')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'magnewspress-nav-secondaryunderline-onhover',
                'label' => __('Secondary Underline On Hover', 'magnewspress')
            )
        );
    }
    add_action('init', 'magnewspress_register_block_styles');
}
