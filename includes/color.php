<?php
/**
 * Color Options
**/

/* Create Background Color Options */
add_action( 'customize_register', 'fyeah_color_customizer' );

/**
 * Register Customizer Background Color Option
 */
function fyeah_color_customizer( $wp_customize ){

	/* === BACKGROUND COLOR === */

	/* Color setting */
	$wp_customize->add_setting( 'bg_color', array(
		'default'             => '#ecf0f1',
		'type'                => 'theme_mod',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'sanitize_hex_color_no_hash',
	));

	/* Add in color section */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_color',
			array(
				'label'               => _x( 'Background Color', 'customizer', 'fyeah' ),
				'section'             => 'colors',
				'settings'            => 'bg_color',
				'priority'            => 10,
			)
		)
	);

	/* === LINK COLOR === */

	/* Color setting */
	$wp_customize->add_setting( 'link_color', array(
		'default'             => '#0073aa',
		'type'                => 'theme_mod',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'sanitize_hex_color_no_hash',
	));

	/* Add in color section */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
				'label'               => _x( 'Link Color', 'customizer', 'fyeah' ),
				'section'             => 'colors',
				'settings'            => 'link_color',
				'priority'            => 10,
			)
		)
	);

	/* === LINK COLOR (HOVER) === */

	/* Color setting */
	$wp_customize->add_setting( 'link_hover_color', array(
		'default'             => '#00a0d2',
		'type'                => 'theme_mod',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'sanitize_hex_color_no_hash',
	));

	/* Add in color section */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_hover_color',
			array(
				'label'               => _x( 'Link Hover Color', 'customizer', 'fyeah' ),
				'section'             => 'colors',
				'settings'            => 'link_hover_color',
				'priority'            => 10,
			)
		)
	);

}


/* Print CSS to wp_head */
add_action( 'wp_head', 'fyeah_color_print_css' );

/**
 * Print BG Color CSS
 */
function fyeah_color_print_css(){

	/* Var */
	$css = '';
	$bg_color = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'bg_color', 'ecf0f1' ) );
	$link_color = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'link_color', '0073aa' ) );
	$link_hover_color = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'link_hover_color', '00a0d2' ) );

	/* BG Color */
	if ( 'ecf0f1' != $bg_color ){
		$css .= "body{ background-color: #{$bg_color}; }";
		$css .= "#site-logo > a:hover img.logo-img, #site-logo > a:focus img.logo-img{ border-color: #{$bg_color};}";
	}

	/* Link Color */
	if ( '0073aa' != $link_color ){
		$css .= "a{ color: #{$link_color}; }";
		$css .= ".entry-header{ border-bottom: 1px solid #{$link_color}; }";
		$css .= ".entry-header:after{color: #{$link_color};}";
	}

	/* Link Hover Color */
	if ( '00a0d2' != $link_hover_color ){
		$css .= "a:hover,a:focus { color: #{$link_hover_color};}";
		$css .= "#site-title a:hover, #site-title a:focus{ color: #{$link_hover_color};}";
		$css .= ".entry-title a:hover,.entry-title a:focus{color: #{$link_hover_color};}";
	}

	/* Print it. */
	if ( !empty( $css ) ){
		echo "\n" . '<style type="text/css" id="fyeah-color-css">' . trim( $css ) . '</style>' . "\n";
	}
}

