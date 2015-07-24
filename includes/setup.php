<?php
/**
 * Setup Theme Elements
**/

/* === Register Sidebars === */

$sidebars_args = array(
	"primary"   => array( "name" => _x( 'Sidebar', 'sidebar name', 'fyeah' ), "description" => "" ),
);
add_theme_support( 'tamatebako-sidebars', $sidebars_args );


/* === Register Menus === */

$nav_menus_args = array(
	"primary" => _x( 'Navigation', 'nav menu name', 'fyeah' ),
	"social-links" => _x( 'Social Links', 'nav menu name', 'fyeah' ),
	"footer-links" => _x( 'Footer Links', 'nav menu name', 'fyeah' ),
);
register_nav_menus( $nav_menus_args );


/* === Maximum Content Width === */

$GLOBALS['content_width'] = 500;


/* === Thumbnail Size === */

//add_image_size( 'theme-thumbnail', 300, 200, true );
set_post_thumbnail_size( 500, 9999, false );

