<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Overloading framework's VC shortcode mapping of: us_portfolio
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 *
 * @param $config ['atts'] array Shortcode's attributes and default values
 */

global $us_template_directory;
require $us_template_directory . '/framework/plugins-support/js_composer/map/us_portfolio.php';

vc_remove_param( 'us_portfolio', 'style' );
vc_add_param( 'us_portfolio', array(
	'param_name' => 'style',
	'heading' => __( 'Items Style', 'us' ),
	'description' => '',
	'type' => 'dropdown',
	'value' => array(
		sprintf( __( 'Style %d', 'us' ), 1 ) => 'style_1',
		sprintf( __( 'Style %d', 'us' ), 2 ) => 'style_2',
		sprintf( __( 'Style %d', 'us' ), 3 ) => 'style_3',
		sprintf( __( 'Style %d', 'us' ), 4 ) => 'style_4',
		sprintf( __( 'Style %d', 'us' ), 5 ) => 'style_5',
		sprintf( __( 'Style %d', 'us' ), 6 ) => 'style_6',
		sprintf( __( 'Style %d', 'us' ), 7 ) => 'style_7',
		sprintf( __( 'Style %d', 'us' ), 8 ) => 'style_8',
		sprintf( __( 'Style %d', 'us' ), 9 ) => 'style_9',
		sprintf( __( 'Style %d', 'us' ), 10 ) => 'style_10',
		sprintf( __( 'Style %d', 'us' ), 11 ) => 'style_11',
		sprintf( __( 'Style %d', 'us' ), 12 ) => 'style_12',
		sprintf( __( 'Style %d', 'us' ), 13 ) => 'style_13',
		sprintf( __( 'Style %d', 'us' ), 14 ) => 'style_14',
		sprintf( __( 'Style %d', 'us' ), 15 ) => 'style_15',
	),
	'std' => $config['atts']['style'],
	'admin_label' => TRUE,
	'edit_field_class' => 'vc_col-sm-6 vc_column',
	'weight' => 80,
) );
