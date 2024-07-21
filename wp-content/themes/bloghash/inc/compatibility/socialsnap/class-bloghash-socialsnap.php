<?php
/**
 * Social Snap compatibility class.
 *
 * @package BlogHash
 * @author Peregrine Themes
 * @since   1.0.0
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Bloghash_SocialSnap' ) ) :
	/**
	 * Social Snap compatibility class.
	 */
	class Bloghash_SocialSnap {

		/**
		 * Primary class constructor.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			add_action( 'activate_socialsnap/socialsnap.php', array( $this, 'disable_redirect_on_activation' ), 20 );

			// If Social Snap is not activated then return.
			if ( ! class_exists( 'SocialSnap' ) ) {
				return;
			}

			// Filter Customizer options.
			add_filter( 'bloghash_customizer_options', array( $this, 'register_options' ), 20 );

			// Set default Customizer values.
			add_filter( 'bloghash_default_option_values', array( $this, 'default_customizer_values' ), 20 );

			// Remove Social Snap Lite from recommended plugins.
			add_filter( 'bloghash_recommended_plugins', array( $this, 'update_recommended_plugins' ) );

			// Include helper functions.
			require BLOGHASH_THEME_PATH . '/inc/compatibility/socialsnap/socialsnap-functions.php'; // phpcs:ignore
		}

		/**
		 * Disable admin page redirect on plugin activation.
		 *
		 * @since 1.0.0
		 */
		public static function disable_redirect_on_activation() {
			delete_site_transient( 'socialsnap_activation_redirect' );
		}

		/**
		 * Filter options to include Social Snap.
		 *
		 * @since 1.0.0
		 * @param array $options Array of customizer options.
		 */
		public function register_options( $options ) {

			$options['setting']['bloghash_single_post_meta_elements']['control']['choices']['shares'] = esc_html__( 'Shares', 'bloghash' );

			$options['setting']['bloghash_blog_entry_meta_elements']['control']['choices']['shares'] = esc_html__( 'Shares', 'bloghash' );

			return $options;
		}

		/**
		 * Add defaults for Social Snap options.
		 *
		 * @param  array $defaults Array of default values.
		 * @return array           Array of default values.
		 */
		public function default_customizer_values( $defaults ) {

			$defaults['bloghash_single_post_meta_elements']['shares'] = false;
			$defaults['bloghash_blog_entry_meta_elements']['shares']  = false;

			return $defaults;
		}

		/**
		 * Removes Social Snap lite from recommended plugins if premium version of Social Snap is activated.
		 *
		 * @param  array $plugins Plugins array.
		 * @return array
		 */
		public function update_recommended_plugins( $plugins ) {

			// Check if pro version is installed.
			if ( socialsnap()->pro ) {
				unset( $plugins['socialsnap'] );
			}

			return $plugins;
		}
	}
endif;
new Bloghash_SocialSnap();
