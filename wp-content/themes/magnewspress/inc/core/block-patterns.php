<?php

/**
 * magnewspress: Block Patterns
 *
 * @since magnewspress 1.0.0
 */

/**
 * Registers pattern categories for magnewspress
 *
 * @since magnewspress 1.0.0
 *
 * @return void
 */
function magnewspress_register_pattern_category()
{
	$block_pattern_categories = array(
		'magnewspress' => array('label' => __('MagnewsPress Sections', 'magnewspress')),
		'magnewspress-home' => array('label' => __('MagnewsPress Home Pages', 'magnewspress')),
		'magnewspress-contact' => array('label' => __('MagnewsPress Contact Us Pages', 'magnewspress')),
		'magnewspress-services' => array('label' => __('MagnewsPress Service Pages', 'magnewspress')),
		'magnewspress-about' => array('label' => __('MagnewsPress About Us Pages', 'magnewspress'))
	);

	$block_pattern_categories = apply_filters('magnewspress_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'magnewspress_register_pattern_category', 9);
