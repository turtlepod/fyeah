<?php
/**
 * Setup Theme Elements
**/

/* === Maximum Content Width === */

global $content_width;
if ( ! isset( $content_width ) ){
	$content_width = 500;
}

/* === Register Sidebars === */

$sidebars_args = array(
	"primary"   => array( "name" => _x( 'Sidebar', 'sidebar name', 'fyeah' ), "description" => "" ),
);
add_theme_support( 'tamatebako-sidebars', $sidebars_args );


/* === Register Menus === */

$nav_menus_args = array(
	"primary"      => _x( 'Navigation', 'nav menu name', 'fyeah' ),
	"social-links" => _x( 'Social Links', 'nav menu name', 'fyeah' ),
	"footer-links" => _x( 'Footer Links', 'nav menu name', 'fyeah' ),
);
register_nav_menus( $nav_menus_args );
