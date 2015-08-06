<?php
/**
 * Custom Fonts Options
 * Google fonts also enqueued using this feature.
**/

$fonts_config = array(
	'site_title_font' => array(
		'label' => _x( 'Site Title Font', 'customizer', 'fyeah' ),
		'target' => '#site-title',
		'fonts' => array( 'websafe', 'heading', 'base' ),
		'default' => 'Satisfy',
	),
	'post_title_font' => array(
		'label' => _x( 'Post Title Font', 'customizer', 'fyeah' ),
		'target' => '#content .entry-title',
		'fonts' => array( 'websafe', 'heading', 'base' ),
		'default' => 'Satisfy',
	),
	'base_font' => array(
		'label' => _x( 'Base Font', 'customizer', 'nokonoko' ),
		'target' => 'body.wordpress,body#tinymce',
		'fonts' => array( 'websafe', 'base' ),
		'default' => 'PT Serif',
	),
);

$fonts_settings = array(
	'editor_styles' => array(
		'base_font',
	),
);

$fonts_strings = array(
	'fonts' => _x( 'Fonts', 'customizer', 'fyeah' ),
);

add_theme_support( 'tamatebako-custom-fonts', $fonts_config, $fonts_settings, $fonts_strings );


