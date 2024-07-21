<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('magnewspress_is_plugin_installed')) {
    function magnewspress_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('magnewspress_is_plugin_activated')) {
    function magnewspress_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('magnewspress_welcome_notice')) :
    function magnewspress_welcome_notice()
    {
        if (get_option('magnewspress_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $magnewspress_version = $theme->get('Version');


?>
            <div class="magnewspress-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="magnewspress-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to MagnewsPress', 'magnewspress'); ?></span></h5>
                        <h1><?php echo __('Take your website building to next level with Cozy Blocks!', 'magnewspress'); ?></h1>
                        </h3>
                        <div class="notice-text">
                            <p class="cozy-blocks-text"><?php echo __('Build website for any niche effortlessly with Cozy Blocks! Just install and activate to access over 30 advanced blocks, 200+ ready to use patterns, and a comprehensive library of 10+ starter templates. Start crafting your perfect website today!', 'magnewspress') ?></p>
                            <p><?php echo __('Please install and activate all recommended to use blcoks and demo importer features- Cozy Addons, Cozy Essential Addons, Advanced Import.', 'magnewspress') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'magnewspress'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-magnewspress" class="button admin-button info-button"><?php echo __('Explore MagnewsPress', 'magnewspress'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/screen_plugin_ct.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'magnewspress_welcome_notice');
function magnewspress_dismissble_notice()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'magnewspress_admin_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
        return;
    }

    $result = update_option('magnewspress_dismissed_custom_notice', 1);

    if ($result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Failed to update option'));
    }
}
add_action('wp_ajax_magnewspress_dismissble_notice', 'magnewspress_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_magnewspress_install_and_activate_plugins', 'magnewspress_install_and_activate_plugins');
add_action('wp_ajax_nopriv_magnewspress_install_and_activate_plugins', 'magnewspress_install_and_activate_plugins');
add_action('wp_ajax_magnewspress_rplugin_activation', 'magnewspress_rplugin_activation');
add_action('wp_ajax_nopriv_magnewspress_rplugin_activation', 'magnewspress_rplugin_activation');

// Function to install and activate the plugins



function magnewspress_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function magnewspress_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function magnewspress_install_and_activate_plugins()
{
    check_ajax_referer('magnewspress_welcome_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Addons', 'magnewspress')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'magnewspress')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'magnewspress')
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            magnewspress_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_magnewspress_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                magnewspress_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            magnewspress_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        magnewspress_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            magnewspress_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                magnewspress_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            magnewspress_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            magnewspress_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function is_magnewspress_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function magnewspress_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function magnewspress_dashboard_menu()
{
    add_theme_page(esc_html__('About MagnewsPress', 'magnewspress'), esc_html__('About MagnewsPress', 'magnewspress'), 'edit_theme_options', 'about-magnewspress', 'magnewspress_theme_info_display');
}
add_action('admin_menu', 'magnewspress_dashboard_menu');
function magnewspress_theme_info_display()
{ ?>
    <div class="dashboard-about-magnewspress">
        <div class="magnewspress-dashboard">
            <ul id="magnewspress-dashboard-tabs-nav">
                <li><a href="#magnewspress-welcome"><?php echo __('Get Started', 'magnewspress') ?></a></li>
                <li><a href="#magnewspress-setup"><?php echo __('Setup Instruction', 'magnewspress') ?></a></li>
                <li><a href="#magnewspress-comparision"><?php echo __('FREE VS PRO', 'magnewspress') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="magnewspress-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the MagnewsPress - News, Magazine and Blog WordPress Theme', 'magnewspress') ?></h1>
                    <p><?php echo __('MagnewsPress is the ultimate WordPress theme designed for news and magazine websites. Offering full site editing capabilities, this theme empowers you to customize every aspect of your site with ease. Choose from 30+ ready-to-use sections and 5 stunning homepage templates to create a professional and engaging online presence. Seamlessly integrated with Cozy Blocks, MagnewsPress extends your site editor\'s features, providing access to 30+ advanced blocks, 200+ additional sections, and over 10 more homepage templates. Whether you\'re running a news portal or an online magazine, MagnewsPress delivers the flexibility and tools you need to stand out in the digital landscape. Explore more about MagnewsPress at https://cozythemes.com/magnewspress-news-wordpress-theme.', 'magnewspress') ?></p>
                    <h3><?php echo __('Required Plugins', 'magnewspress'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'magnewspress') ?></p>
                    <ul class="magnewspress-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'magnewspress'); ?>
                                <?php
                                if (magnewspress_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'magnewspress');
                                } elseif (magnewspress_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'magnewspress');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'magnewspress') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'magnewspress'); ?>
                                <?php
                                if (magnewspress_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'magnewspress');
                                } elseif (magnewspress_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'magnewspress');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'magnewspress') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'magnewspress'); ?>
                                <?php
                                if (magnewspress_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'magnewspress');
                                } elseif (magnewspress_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'magnewspress');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'magnewspress') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'magnewspress'); ?></a>
                </div>
                <div id="magnewspress-setup" class="tab-content">
                    <h3 class="magnewspress-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'magnewspress') ?></h3>
                    <div class="magnewspress-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'magnewspress') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'magnewspress') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'magnewspress') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'magnewspress') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'magnewspress') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'magnewspress') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'magnewspress') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'magnewspress') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'magnewspress') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'magnewspress') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'magnewspress') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="magnewspress-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('MagnewsPress Features (Free)', 'magnewspress') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('MagnewsPress offer wide range of  ready to use Home Sections Patterns', 'magnewspress') ?></strong>
                                    <ul>
                                        <li><?php echo __('Featured Banner -5', 'magnewspress') ?></li>
                                        <li><?php echo __('Featured Category Display -3', 'magnewspress') ?></li>
                                        <li><?php echo __('Featured Post Grid', 'magnewspress') ?></li>
                                        <li><?php echo __('Latest Post List', 'magnewspress') ?></li>
                                        <li><?php echo __('Post Grid', 'magnewspress') ?></li>
                                        <li><?php echo __('You may missed section', 'magnewspress') ?></li>
                                        <li><?php echo __('Section Heading - 10+', 'magnewspress') ?></li>
                                        <li><?php echo __('Tag Display Section', 'magnewspress') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'magnewspress') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Archive Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Blank Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Front Page Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Index Page Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Search Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Page Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Full Width Page  Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Single Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Single Product Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'magnewspress') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'magnewspress') ?></li>

                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Ready to import homepage demos - 5', 'magnewspress') ?></strong></li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout - 5', 'magnewspress') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout - 5 ', 'magnewspress') ?></strong></li>
                                <li><strong> - <?php echo __('12 Beautiful Fonts Option', 'magnewspress') ?></strong></li>
                                <li> <strong>- <?php echo __('Innper Page Templates', 'magnewspress') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'magnewspress') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 22 Advanced Blocks for FSE and Gutenberg Editor', 'magnewspress') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'magnewspress') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'magnewspress') ?></p>
                            <ul>
                                <li><?php echo __('Ready to import homepage demos - 6 (Total)', 'magnewspress') ?></li>
                                <li><?php echo __('8 More Additional pre-build Featured Banner and slider section', 'magnewspress') ?></li>
                                <li><?php echo __('9 more  pre-build Magazine Section', 'magnewspress') ?></li>
                                <li><?php echo __('4 more  pre-build News Ticker', 'magnewspress') ?></li>
                                <li><?php echo __('4 more  pre-build Post Carousel Section', 'magnewspress') ?></li>
                                <li><?php echo __('Post Grid/Carousel Block', 'magnewspress') ?></li>
                                <li><?php echo __('Slider Block', 'magnewspress') ?></li>
                                <li><?php echo __('Related Post Block', 'magnewspress') ?></li>
                                <li><?php echo __('Popular Post Block', 'magnewspress') ?></li>
                                <li><?php echo __('Trending Post Block', 'magnewspress') ?></li>
                                <li><?php echo __('News Ticker Block', 'magnewspress') ?></li>
                                <li><?php echo __('Counter Block', 'magnewspress') ?></li>
                                <li><?php echo __('Team Block (With Carousel)', 'magnewspress') ?></li>
                                <li><?php echo __('Testimonials Block (With Carousel)', 'magnewspress') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'magnewspress') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'magnewspress') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'magnewspress') ?></li>
                                <li><?php echo __('Portfolio Block (With Custom Post Type)', 'magnewspress') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'magnewspress') ?>
                                    <?php echo __('and access', 'magnewspress') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 30+ advanced block.', 'magnewspress') ?></a>
                                </li>

                            </ul>
                            <br />

                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'magnewspress') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
