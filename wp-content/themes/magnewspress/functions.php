<?php
if (!defined('MAGNEWSPRESS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('MAGNEWSPRESS_VERSION', wp_get_theme()->get('Version'));
}
define('MAGNEWSPRESS_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('MAGNEWSPRESS_DIR', trailingslashit(get_template_directory()));
define('MAGNEWSPRESS_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('magnewspress_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function magnewspress_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'magnewspress_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('magnewspress_styles')) :
    function magnewspress_styles()
    {
        // registering style for theme
        wp_enqueue_style('magnewspress-style', get_stylesheet_uri(), array(), MAGNEWSPRESS_VERSION);
        wp_enqueue_style('magnewspress-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('magnewspress-swiper-bundle-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css');
        wp_enqueue_style('magnewspress-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('magnewspress-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('magnewspress-swiper-bundle-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), MAGNEWSPRESS_VERSION, true);
        wp_enqueue_script('magnewspress-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), MAGNEWSPRESS_VERSION, true);
        wp_enqueue_script('magnewspress-scripts', get_template_directory_uri() . '/assets/js/magnewspress-scripts.js', array(), MAGNEWSPRESS_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'magnewspress_styles');

/**
 * Enqueue scripts for admin area
 */
function magnewspress_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-magnewspress' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('magnewspress-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), MAGNEWSPRESS_VERSION, 'all');
        wp_enqueue_script('magnewspress-admin-scripts', get_template_directory_uri() . '/assets/js/magnewspress-admin-scripts.js', array(), MAGNEWSPRESS_VERSION, true);
        wp_localize_script('magnewspress-admin-scripts', 'magnewspress_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('magnewspress_admin_nonce')
        ));
        wp_enqueue_script('magnewspress-welcome-notice', get_template_directory_uri() . '/inc/admin/js/magnewspress-welcome-notice.js', array('jquery'), MAGNEWSPRESS_VERSION, true);
        wp_localize_script('magnewspress-welcome-notice', 'magnewspress_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('magnewspress_welcome_nonce'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'magnewspress_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function magnewspress_block_assets()
{
    wp_enqueue_style('magnewspress-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'magnewspress_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('magnewspress_excerpt_more_postfix')) {
    function magnewspress_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'magnewspress_excerpt_more_postfix');
}
function magnewspress_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'magnewspress_add_woocommerce_support');
