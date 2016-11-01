<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Modifying shortcode: vc_icon
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 */
// Setting proper shortcode order in VC shortcodes listing
vc_map_update( 'vc_icon', array( 'weight' => 130 ) );
