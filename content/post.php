<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<header class="entry-header">

			<?php tamatebako_entry_title(); ?>

			<div class="entry-byline">

				<span class="entry-author"><?php the_author_posts_link(); ?></span>

				<?php tamatebako_comments_link(); ?>

				<?php tamatebako_entry_date(); ?>

			</div><!-- .entry-byline -->

		</header><!-- .entry-header -->

		<?php if( 'full_text' == get_theme_mod( 'post_display', 'full_text' ) ){ ?>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->

		<?php } else { /* Excerpt and Thumbnail */ ?>

			<div class="entry-summary">

				<?php if ( has_post_thumbnail() ) {
					$thumbnail_data = wp_get_attachment_image_src( absint( get_post_thumbnail_id() ), 'large' );
					$thumbnail_width = $thumbnail_data[1];
					if( $thumbnail_width > 450 ){ ?>
						<a class="theme-thumbnail theme-thumbnail-large" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
					<?php } else { /* small thumbnail */ ?>
						<a class="theme-thumbnail theme-thumbnail-small" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						</a>
					<?php } // end thumbnail size ?>
				<?php } // end thumbnail ?>

				<?php the_excerpt(); ?>
				<?php tamatebako_read_more(); ?>

			</div><!-- .entry-summary -->

		<?php } /* end post display conditional */ ?>

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_terms(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->
