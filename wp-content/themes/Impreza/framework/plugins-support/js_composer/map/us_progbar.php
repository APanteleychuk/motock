<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_contacts
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 *
 * @param $config ['atts'] array Shortcode's attributes and default values
 */
vc_map( array(
	'name' => __( 'Progress Bar', 'us' ),
	'base' => 'us_progbar',
	'icon' => 'icon-wpb-graph',
	'category' => __( 'Content', 'us' ),
	'weight' => 125,
	'params' => array(
		array(
			'param_name' => 'title',
			'heading' => __( 'Title', 'us' ),
			'description' => '',
			'type' => 'textfield',
			'holder' => 'div',
			'std' => $config['atts']['title'],
			'weight' => 50,
		),
		array(
			'param_name' => 'count',
			'heading' => __( 'Progress Bar Value', 'us' ),
			'description' => '',
			'type' => 'textfield',
			'std' => $config['atts']['count'],
			'holder' => 'span',
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 40,
		),
		array(
			'param_name' => 'color',
			'heading' => __( 'Progress Bar Color', 'us' ),
			'description' => '',
			'type' => 'dropdown',
			'value' => array(
				__( 'Primary (theme color)', 'us' ) => 'primary',
				__( 'Secondary (theme color)', 'us' ) => 'secondary',
				__( 'Contrast (theme color)', 'us' ) => 'contrast',
				__( 'Custom color', 'us' ) => 'custom',
			),
			'std' => $config['atts']['color'],
			'weight' => 20,
		),
		array(
			'param_name' => 'bar_color',
			'heading' => __( 'Progress Bar Color', 'us' ),
			'description' => '',
			'type' => 'colorpicker',
			'std' => $config['atts']['bar_color'],
			'class' => '',
			'dependency' => array( 'element' => 'color', 'value' => 'custom' ),
			'weight' => 10,
		),
		array(
			'param_name' => 'size',
			'heading' => __( 'Size', 'us' ),
			'description' => '',
			'type' => 'dropdown',
			'value' => array(
				__( 'Small', 'us' ) => 'small',
				__( 'Medium', 'us' ) => 'medium',
				__( 'Large', 'us' ) => 'large',
			),
			'std' => $config['atts']['size'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 30,
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
