<?php
/**
 * Custom Background
**/

/* === Custom Background === */
$custom_backgound_args = array(
	'default-color'          => '#ecf0f1',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
);
add_theme_support( 'custom-background', $custom_backgound_args );
