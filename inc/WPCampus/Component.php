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
	public function initialize() {}
}
