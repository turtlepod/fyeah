<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<?php if( is_singular() ){?>

			<header class="entry-header">
				<?php tamatebako_entry_title(); ?>
				<div class="entry-byline">
					<span class="entry-author"><?php the_author_posts_link(); ?></span>
					<?php tamatebako_comments_link(); ?>
					<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink();?>"><time class="entry-published updated" datetime="<?php echo get_the_time( 'Y-m-d\TH:i:sP' ); ?>"><?php echo get_the_date(); ?></time></a>
				</div><!-- .entry-byline -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php edit_post_link(); ?>
				<?php tamatebako_entry_terms(); ?>
			</footer><!-- .entry-footer -->

		<?php } else { /* not singular */ ?>

			<div class="entry-byline">
				<time class="entry-published updated" datetime="<?php echo get_the_time( 'Y-m-d\TH:i:sP' ); ?>"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink();?>"><?php echo get_the_date(); ?></a></time>
			</div><!-- .entry-byline -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->

		<?php } /* end singular conditional */ ?>

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php if( is_singular() ){
	tamatebako_entry_nav();
	comments_template( '', true ); // Load comments.
} ?>