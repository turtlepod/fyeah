<?php
/**
 * Utility Features
**/
/* === CUSTOM CSS === */
/* WP 4.7 Custom CSS Compat
------------------------------------------ */
global $wp_version;
if( version_compare( $wp_version, '4.7', '>=' ) ){

	/* Tamatebako CSS */
	$old_css = get_theme_mod( 'custom_css' );

	/* Only if they use tamatebako custom css module */
	if( $old_css ){

		/* Check if user already use custom css */
		$css_id = get_theme_mod( 'custom_css_post_id' );

		/* User already use wp 4.7 custom css, clean old data. */
		if( $css_id && $css_id !== -1 ){
			remove_theme_mod( 'custom_css' );
		}

		/* User not yet use custom css */
		else{

			/* Filter Customizer Control */
			add_filter( 'customize_value_custom_css', function( $css ) use( $old_css ){
				return $old_css;
			} );

			/* Filter Output */
			add_filter( 'wp_get_custom_css', function( $css ) use( $old_css ){
				return $old_css;
			} );
		}
	}
}
/* Using WP 4.6 or less */
else{

	/* === TAMATEBAKO CUSTOM CSS === */
	$custom_css_args = array(
		'title' => _x( 'Custom CSS', 'customizer', 'fyeah' ),
		'label' => _x( 'Custom CSS', 'customizer', 'fyeah' ),
	);

	add_theme_support( 'tamatebako-custom-css', $custom_css_args );
}
