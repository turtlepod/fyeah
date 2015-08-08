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


/* Standard Post Display Options */
add_action( 'customize_register', 'fyeah_post_display_customizer', 11 );

/**
 * Register Customizer FOr Reading Setting
 * Option to display standard blog post as summary + thumbnail or full text
 */
function fyeah_post_display_customizer( $wp_customize ){

	/* Setting */
	$wp_customize->add_setting( 'post_display', array(
		'default'             => 'full_text',
		'type'                => 'theme_mod',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'fyeah_sanitize_post_display',
	));

	/* Radio Options */
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'post_display',
			array(
				'label'          => _x( 'For standard post in archive, show', 'customizer', 'fyeah' ),
				'section'        => 'layout',
				'settings'       => 'post_display',
				'type'           => 'radio',
				'choices'        => array(
					'full_text'   => _x( 'Full Text', 'customizer', 'fyeah' ),
					'summary'  => _x( 'Summary', 'customizer', 'fyeah' ),
				)
			)
		)
	);
}

/**
 * Sanitize Post Display Choices
 */
function fyeah_sanitize_post_display( $input ){
	$choices = array( 'full_text', 'summary' );
	if( in_array( $input, $choices ) ){
		return $input;
	}
	return '';
}
