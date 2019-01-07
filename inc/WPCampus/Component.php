<?php
/**
 * WP_Rig\WP_Rig\WPCampus\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\WPCampus;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use function add_action;

/**
 * Class for adding custom WPCampus features/support.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'wpcampus';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
		add_filter( 'wp_rig_google_fonts', array( $this, 'google_fonts' ) );
	}

	/**
	 * Adds WPCampus features to theme.
	 */
	public function setup_theme() {

		// Enable network components.
		if ( function_exists( 'wpcampus_network_enable' ) ) {
			wpcampus_network_enable( array( 'banner', 'notifications', 'coc', 'footer' ) );
		}

		// Add code of conduct before footer.
		if ( function_exists( 'wpcampus_print_network_coc' ) ) {
			add_action( 'wp_footer', 'wpcampus_print_network_coc', -100 );
		}

		if ( function_exists( 'wpcampus_print_network_footer' ) ) {
			add_action( 'wp_footer', 'wpcampus_print_network_footer', -99 );
		}
	}

	/**
	 * Set our Google Font selection.
	 *
	 * @return array - the font defintion.
	 */
	public function google_fonts() {
		return array(
			'Open Sans' => array( '400', '400i', '700', '700i' ),
		);
	}
}
