<?php
/**
 * Theme Functions
** ---------------------------- */

/* Load Library. */
require_once( trailingslashit( get_template_directory() ) . 'tamatebako/tamatebako.php' );

/* Load theme general setup */
add_action( 'after_setup_theme', 'fyeah_theme_setup', 5 );

/**
 * Setup
 */
function fyeah_theme_setup(){

	/* Path */
	$theme_path = trailingslashit( get_template_directory() );
	$includes = trailingslashit( $theme_path . 'includes' );

	/* === TRANSLATION === */
	require_once( $includes . 'translation.php' );

	/* === SCRIPTS === */
	require_once( $includes . 'scripts.php' );

	/* === SETUP: Sidebars, Menus, Image Sizes, Content Width === */
	require_once( $includes . 'setup.php' );

	/* === LAYOUTS === */
	require_once( $includes . 'layouts.php' );

	/* === HEADER IMAGE === */
	require_once( $includes . 'header-image.php' );

	/* === LOGO === */
	require_once( $includes . 'logo.php' );

	/* === UTILITY: Mobile View, Custom CSS === */
	require_once( $includes . 'utility.php' );

	/* === POST FORMATS === */
	require_once( $includes . 'post-formats.php' );

	/* === COLOR OPTIONS === */
	require_once( $includes . 'color.php' );
}

do_action( 'tamatebako_after_setup' );