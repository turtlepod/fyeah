<?php
/**
 * Custom Header Image
**/

/* === Custom Header Image === */
$custom_header_args = array(
	'default-image'          => get_template_directory_uri() . '/assets/images/header.jpg',
	'random-default'         => false,
	'width'                  => 1600,
	'height'                 => 200,
	'flex-height'            => false,
	'flex-width'             => true,
	'default-text-color'     => false,
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
);
add_theme_support( 'custom-header', $custom_header_args );
