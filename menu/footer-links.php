<?php
/**
 * Footer Menu Links
 * @links http://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/
 */
if ( tamatebako_is_menu_registered( 'footer-links' ) ){
	$args = array(
		'theme_location'  => 'footer-links',
		'container'       => false,
		'echo'            => false,
		'items_wrap'      => '<span id="footer-links">%3$s</span>',
		'depth'           => 1,
		'fallback_cb'     => '__return_false',
	);
	echo strip_tags( wp_nav_menu( $args ), '<span><a>' );
}