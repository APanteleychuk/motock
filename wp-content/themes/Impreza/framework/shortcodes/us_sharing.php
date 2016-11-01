<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_sharing
 *
 * Dev note: if you want to change some of the default values or acceptable attributes, overload the shortcodes config.
 *
 * @var $shortcode string Current shortcode name
 * @var $shortcode_base string The original called shortcode name (differs if called an alias)
 * @var $content string Shortcode's inner content
 * @var $atts array Shortcode attributes
 *
 * @param $atts ['align'] string Align: 'left' / 'center' / 'right'
 * @param $atts ['type'] string Type: 'simple' / 'outlined' / 'solid' / 'fixed_left' / 'fixed_right'
 * @param $atts ['facebook'] bool Is Facebook button available?
 * @param $atts ['twitter'] bool Is Twitter button available?
 * @param $atts ['linkedin'] bool Is Google+ button available?
 * @param $atts ['gplus'] bool Is Google+ button available?
 * @param $atts ['pinterest'] bool Is Pinterest button available?
 * @param $atts ['url'] string Sharing URL
 * @param $atts ['el_class'] string Extra class name
 */

$atts = us_shortcode_atts( $atts, 'us_sharing' );

// The list of available sharing providers and additional in-shortcode data
$providers = array(
	'facebook' => array(
		'title' => __( 'Share this', 'us' ),
		'icon' => 'facebook',
	),
	'twitter' => array(
		'title' => __( 'Tweet this', 'us' ),
		'icon' => 'twitter',
	),
	'linkedin' => array(
		'title' => __( 'Share this', 'us' ),
		'icon' => 'linkedin',
	),
	'gplus' => array(
		'title' => __( 'Share this', 'us' ),
		'icon' => 'google-plus',
	),
	'pinterest' => array(
		'title' => __( 'Pin this', 'us' ),
		'icon' => 'pinterest',
	),
);
// Keeping only the actually used providers
foreach ( $providers as $provider => $provider_data ) {
	if ( ! $atts[ $provider ] ) {
		unset( $providers[ $provider ] );
	}
}
if ( empty( $providers ) ) {
	return;
}

// .w-sharing container additional classes
$classes = '';
if ( $atts['type'] == 'fixed_left' OR $atts['type'] == 'fixed_right' ) {
	$classes .= ' type_solid ' . $atts['type'];
} else {
	$classes .= ' type_' . $atts['type'];
}
$classes .= ' align_' . $atts['align'];

if ( empty( $atts['url'] ) ) {
	// Using the current page URL
	$atts['url'] = site_url( $_SERVER['REQUEST_URI'] );
}

$counts = us_get_sharing_counts( $atts['url'], array_keys( $providers ) );

$output = '<div class="w-sharing' . $classes . '">';
foreach ( $providers as $provider => $provider_data ) {
	$output .= '<a class="w-sharing-item ' . $provider . '" title="' . esc_attr( $provider_data['title'] ) . '" href="javascript:void(0)">';
	$output .= '<span class="w-sharing-icon"><i class="' . us_prepare_icon_class( $provider_data['icon'] ) . '"></i></span>';
	if ( isset( $counts[ $provider ] ) ) {
		$output .= '<span class="w-sharing-count">' . $counts[ $provider ] . '</span>';
	}
	$output .= '</a>';
}
$output .= '</div>';

echo $output;
