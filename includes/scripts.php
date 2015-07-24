<?php
/**
 * Scripts Setup
**/

/* === EDITOR STYLE === */

$editor_css = array(
	add_query_arg( 'family', 'PT+Serif:' . urlencode( '400,400italic,700,700italic' ), "//fonts.googleapis.com/css" ),
	'assets/css/base.min.css',
	'assets/css/editor.css',
);
add_editor_style( $editor_css );


/* === ENQUEUE SCRIPTS === */

add_action( 'wp_enqueue_scripts', 'fyeah_scripts' );

/**
 * Enqueue Scripts
 */
function fyeah_scripts(){

	/* == JS == */
	wp_enqueue_script( 'theme-fitvids' );
	wp_enqueue_script( 'theme-js' );

	/* == CSS == */
	wp_enqueue_style( 'theme-pt-serif' );
	wp_enqueue_style( 'theme-satisfy' );
	wp_enqueue_style( 'theme-genericons' );
	//$dev = true;
	if ( isset( $dev ) && $dev ){
		wp_enqueue_style( 'theme-base' );
		wp_enqueue_style( 'theme-menus' );
		wp_enqueue_style( 'theme-layouts' );
		wp_enqueue_style( 'theme-widgets' );
		wp_enqueue_style( 'theme-comments' );
		wp_enqueue_style( 'theme' );
		wp_enqueue_style( 'theme-media-queries' );
		//wp_enqueue_style( 'debug-media-queries' );
	}
	else{
		tamatebako_maybe_enqueue_style( 'parent' );
		wp_enqueue_style( 'style' );
	}
}

/* === REGISTER JS === */

$register_js_scripts = array(
	/* Library */
	"theme-fitvids" => array(
		'src'        => tamatebako_theme_file( 'assets/js/jquery.fitvids', 'js' ),
		'deps'       => array( 'jquery' ),
		'ver'        => '1.1.0',
	),
	/* Theme */
	"theme-js" => array(
		'src'        => tamatebako_theme_file( 'assets/js/jquery.theme', 'js' ),
		'deps'       => array( 'jquery', 'theme-fitvids' ),
		'ver'        => tamatebako_theme_version(),
		'in_footer'  => true,
	),
);
add_theme_support( 'tamatebako-register-js', $register_js_scripts );


/* === REGISTER CSS === */

$register_css_scripts = array(
	/* Font */
	"theme-pt-serif" => array(
		'src'   => add_query_arg( 'family', 'PT+Serif:' . urlencode( '400,400italic,700,700italic' ), "//fonts.googleapis.com/css" ),
	),
	"theme-satisfy" => array(
		'src'   => add_query_arg( 'family', 'Satisfy', "//fonts.googleapis.com/css" ),
	),
	/* Icon */
	"theme-genericons" => array(
		'src'   => tamatebako_theme_file( 'assets/fonts/genericons/genericons', 'css' ),
		'ver'   => '3.3.1',
	),
	/* Theme */
	"theme-base" => array(
		'src'   => tamatebako_theme_file( 'assets/css/base', 'css' ),
	),
	"theme-layouts" => array(
		'src'   => tamatebako_theme_file( 'assets/css/layouts', 'css' ),
	),
	"theme-menus" => array(
		'src'   => tamatebako_theme_file( 'assets/css/menus', 'css' ),
	),
	"theme-comments" => array(
		'src'   => tamatebako_theme_file( 'assets/css/comments', 'css' ),
	),
	"theme-widgets" => array(
		'src'   => tamatebako_theme_file( 'assets/css/widgets', 'css' ),
	),
	"theme" => array(
		'src'   => tamatebako_theme_file( 'assets/css/theme', 'css' ),
	),
	"theme-media-queries" => array(
		'src'   => tamatebako_theme_file( 'assets/css/media-queries', 'css' ),
	),
	"debug-media-queries" => array(
		'src'   => tamatebako_theme_file( 'assets/css/debug-media-queries', 'css' ),
	),
);
add_theme_support( 'tamatebako-register-css', $register_css_scripts );

