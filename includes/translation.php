<?php
/**
 * Make Framework Translatable
**/

/* Load Text Domain */
load_theme_textdomain( 'fyeah', get_template_directory() . '/assets/languages' );

/* Make all string in the framework translatable. */
$texts = array(

	/* functions/template/accessibility.php */
	'skip_to_content'             => _x( 'Skip to content', 'accessibility', 'fyeah' ),

	/* functions/template/general.php */
	'next_posts'                  => _x( 'Next', 'pagination', 'fyeah' ),
	'previous_posts'              => _x( 'Previous', 'pagination', 'fyeah' ),

	/* functions/template/menu.php */
	'menu_search_placeholder'     => _x( 'Search&hellip;', 'nav menu', 'fyeah' ),
	'menu_search_button'          => _x( 'Search', 'nav menu', 'fyeah' ),
	'menu_search_form_toggle'     => _x( 'Expand Search Form', 'nav menu', 'fyeah' ),
	'menu_default_home'           => _x( 'Home', 'nav menu', 'fyeah' ),

	/* functions/template/entry.php */
	'error_title'                 => _x( '404 Not Found', 'entry', 'fyeah' ),
	'error_message'               => _x( 'Apologies, but no entries were found.', 'entry', 'fyeah' ),
	'next_post'                   => _x( 'Next', 'entry', 'fyeah' ),
	'previous_post'               => _x( 'Previous', 'entry', 'fyeah' ),

	/* functions/template/comment.php */
	'next_comment'                => _x( 'Next', 'comment', 'fyeah' ),
	'previous_comment'            => _x( 'Previous', 'comment', 'fyeah' ),
	'comments_closed_pings_open'  => _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comment', 'fyeah' ),
	'comments_closed'             => _x( 'Comments are closed.', 'comment', 'fyeah' ),

	/* functions/setup.php */
	'untitled'                    => _x( '(Untitled)', 'entry', 'fyeah' ),
	'read_more'                   => _x( 'Read More', 'entry', 'fyeah' ),
	'search_title_prefix'         => _x( 'Search:', 'archive title', 'fyeah' ),
	'comment_moderation_message'  => _x( 'Your comment is awaiting moderation.', 'comment', 'fyeah' ),

);

/* Add text to tamatebako */
tamatebako_load_strings( $texts );