<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_separator
 *
 * Dev note: if you want to change some of the default values or acceptable attributes, overload the shortcodes config.
 *
 * @var $shortcode string Current shortcode name
 * @var $shortcode_base string The original called shortcode name (differs if called an alias)
 * @var $content string Shortcode's inner content
 * @var $atts array Shortcode attributes
 *
 * @param $atts ['title'] string Progress Bar title
 * @param $atts ['count'] int Pregress Bar length in percents: '0' - '100'
 * @param $atts ['color'] string Color style: 'contrast' / 'primary' / 'secondary' / 'custom'
 * @param $atts ['bar_color'] string
 * @param $atts ['size'] string Separator size: 'small' / 'medium' / 'large'
 */

$atts = us_shortcode_atts( $atts, 'us_progbar' );
$color_css = '';

if ( $atts['color'] == 'custom' ) {
	if ( $atts['bar_color'] != '' ) {
		$color_css .= 'background-color: ' . $atts['bar_color'] . ';';
	}
}

$atts['count'] = max( 0, min( 100, $atts['count'] ) );

$el_class = '';
if ( ! empty( $atts['el_class'] ) ) {
	$el_class .= ' ' . $atts['el_class'];
}

$output = '<div class="w-progbar color_' . $atts['color'] . ' size_' . $atts['size'] . $el_class . '" data-count="' . $atts['count'] . '">
				<h6 class="w-progbar-title">
					<span class="w-progbar-title-text">' . $atts['title'] . '</span>
					<span class="w-progbar-title-count">' . $atts['count'] . '%</span>
				</h6>
				<div class="w-progbar-bar">
					<div class="w-progbar-bar-h" style="width: ' . $atts['count'] . '%;' . $color_css . '"></div>
				</div>
			</div>';

echo $output;
