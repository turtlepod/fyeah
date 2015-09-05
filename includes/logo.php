<?php
/**
 * Logo
**/

/* === Logo === */
$logo_args = array(
	'crop'                   => true,
	'width'                  => 300,
	'height'                 => 300,
	'flex_height'            => 0, /* false */
	'flex_width'             => 0, /* false */
	'label'                  => _x( 'Logo', 'customizer', 'fyeah' ),
	'description'            => _x( 'Recommended size for logo is 300px wide and 300px tall. Logo Will be displayed as circle with border.', 'customizer', 'fyeah' ),
);
add_theme_support( 'tamatebako-logo', $logo_args );

