<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_sharing
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 *
 * @param $config ['atts'] array Shortcode's attributes and default values
 */
vc_map( array(
	'base' => 'us_sharing',
	'name' => __( 'Sharing Buttons', 'us' ),
	'icon' => 'icon-wpb-ui-sharing',
	'category' => __( 'Content', 'us' ),
	'weight' => 185,
	'params' => array(
		array(
			'param_name' => 'align',
			'heading' => __( 'Align', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Left', 'us' ) => 'left',
				__( 'Center', 'us' ) => 'center',
				__( 'Right', 'us' ) => 'right',
			),
			'std' => $config['atts']['align'],
			'weight' => 90,
		),
		array(
			'param_name' => 'type',
			'heading' => __( 'Type', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Simple', 'us' ) => 'simple',
				__( 'Outlined', 'us' ) => 'outlined',
				__( 'Solid', 'us' ) => 'solid',
				__( 'Fixed Left', 'us' ) => 'fixed_left',
				__( 'Fixed Right', 'us' ) => 'fixed_right',
			),
			'std' => $config['atts']['type'],
			'weight' => 80,
		),
		array(
			'param_name' => 'facebook',
			'heading' => '',
			'description' => '',
			'type' => 'checkbox',
			'value' => array( __( 'Facebook', 'us' ) => TRUE ),
			( ( $config['atts']['facebook'] !== FALSE ) ? 'std' : '_std' ) => $config['atts']['facebook'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 70,
		),
		array(
			'param_name' => 'twitter',
			'heading' => '',
			'description' => '',
			'type' => 'checkbox',
			'value' => array( __( 'Twitter', 'us' ) => TRUE ),
			( ( $config['atts']['twitter'] !== FALSE ) ? 'std' : '_std' ) => $config['atts']['twitter'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 60,
		),
		array(
			'param_name' => 'linkedin',
			'heading' => '',
			'description' => '',
			'type' => 'checkbox',
			'value' => array( __( 'LinkedIn', 'us' ) => TRUE ),
			( ( $config['atts']['linkedin'] !== FALSE ) ? 'std' : '_std' ) => $config['atts']['linkedin'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 50,
		),
		array(
			'param_name' => 'gplus',
			'heading' => '',
			'description' => '',
			'type' => 'checkbox',
			'value' => array( __( 'Google+', 'us' ) => TRUE ),
			( ( $config['atts']['gplus'] !== FALSE ) ? 'std' : '_std' ) => $config['atts']['gplus'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 40,
		),
		array(
			'param_name' => 'pinterest',
			'heading' => '',
			'description' => '',
			'type' => 'checkbox',
			'value' => array( __( 'Pinterest', 'us' ) => TRUE ),
			( ( $config['atts']['pinterest'] !== FALSE ) ? 'std' : '_std' ) => $config['atts']['pinterest'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 30,
		),
		array(
			'param_name' => 'url',
			'heading' => __( 'Sharing URL', 'us' ),
			'description' => __( 'If not specified, the opened page URL will be used by default', 'us' ),
			'type' => 'textfield',
			'std' => '',
			'weight' => 20,
		),
		array(
			'param_name' => 'el_class',
			'heading' => __( 'Extra class name', 'us' ),
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['el_class'],
			'weight' => 10,
		),
	),
) );
