<?php
/**
 * Layouts Setup
**/
$image_dir = get_template_directory_uri() . '/assets/images/layouts/';
$layouts = array(
	/* Two Columns */
	'header-content'  => array(
		'name'          => _x( 'Header | Content', 'layout name', 'fyeah' ),
		'thumbnail'     => $image_dir . 'header-content.png',
	),
	'content-header'  => array(
		'name'          => _x( 'Content | Header', 'layout name', 'fyeah' ),
		'thumbnail'     => $image_dir . 'content-header.png',
	),
);
$layouts_args = array(
	'default'           => 'header-content',
	'customize'         => true,
	'post_meta'         => false,
	'post_types'        => array(),
	'thumbnail'         => true,
);
$layouts_strings = array(
	'default'           => _x( 'Default', 'layout', 'fyeah' ),
	'layout'            => _x( 'Layout', 'layout', 'fyeah' ),
	'global_layout'     => _x( 'Global Layout', 'layout', 'fyeah' ),
);
add_theme_support( 'tamatebako-layouts', $layouts, $layouts_args, $layouts_strings );
