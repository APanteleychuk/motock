<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme's demo-import settings
 *
 * @filter us_config_demo-import
 */
global $us_template_directory, $us_template_directory_uri;
return array(
	'main' => array(
		'title' => 'Main Demo',
		'image' => $us_template_directory_uri . '/demo-import/main-preview.jpg',
		'preview_url' => 'http://impreza.us-themes.com/',
		'content' => $us_template_directory . '/demo-import/main-content.xml',
		'options' => $us_template_directory . '/demo-import/main-options.json',
		'nav_menu_locations' => array(
			'Impreza Header Menu' => 'us_main_menu',
			'Impreza Footer Menu' => 'us_footer_menu',
		),
		'front_page' => 'Home',
		'sliders' => array(
			$us_template_directory . '/demo-import/main-slider-home1.zip',
			$us_template_directory . '/demo-import/main-slider-home2.zip',
			$us_template_directory . '/demo-import/main-slider-home3.zip',
			$us_template_directory . '/demo-import/main-slider-portfolio.zip',
		),
	),
	'onepage' => array(
		'title' => 'OnePage Demo',
		'image' => $us_template_directory_uri . '/demo-import/onepage-preview.jpg',
		'preview_url' => 'http://impreza2.us-themes.com/',
		'content' => $us_template_directory . '/demo-import/onepage-content.xml',
		'options' => $us_template_directory . '/demo-import/onepage-options.json',
		'nav_menu_locations' => array(
			'Impreza Header Menu' => 'us_main_menu',
			'Impreza Footer Menu' => 'us_footer_menu',
		),
		'front_page' => 'Home',
	),
);
