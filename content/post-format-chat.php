<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="wrap">

		<header class="entry-header">

			<?php tamatebako_entry_title(); ?>

			<div class="entry-byline">

				<span class="entry-author"><?php the_author_posts_link(); ?></span>

				<?php tamatebako_comments_link(); ?>

				<?php tamatebako_entry_date(); ?>

			</div><!-- .entry-byline -->

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry > .wrap -->

</article><!-- .entry -->

<?php if( is_singular() ){
	tamatebako_entry_nav();
	comments_template( '', true ); // Load comments.
} ?>