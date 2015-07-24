<div id="sidebar-primary-wrap">

	<aside class="sidebar" id="sidebar-primary">

		<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

			<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

		<?php else : // If the sidebar has no widgets. ?>

			<?php the_widget( 'WP_Widget_Text',
				array(
					'title' => _x( 'About FYeah', 'default widget', 'fyeah' ),
					'text'  => _x( '<strong>FYeah</strong> is a responsive WordPress themes with Post Formats support, two layouts options, header image, logo upload, background options, and custom css features.', 'default widget', 'fyeah' ),
				),
				array(
					'before_widget' => '<section class="widget widget_text">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>'
				)
			); ?>

			<?php the_widget( 'WP_Widget_Recent_Posts',
				array(
					'number' => 5,
				),
				array(
					'before_widget' => '<section class="widget widget_recent_entries">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>'
				)
			); ?>

			<?php the_widget( 'WP_Widget_Pages',
				array(),
				array(
					'before_widget' => '<section class="widget widget_pages">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>'
				)
			); ?>

		<?php endif; // End widgets check. ?>

	</aside><!-- #sidebar-primary -->

</div>