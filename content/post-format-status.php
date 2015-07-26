<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<?php if( is_singular() ){ ?>
			<header class="entry-header">
				<?php tamatebako_entry_title(); ?>
			</header><!-- .entry-header -->
		<?php } ?>

		<div class="entry-byline">
			<?php echo get_avatar( get_the_author_meta( 'email' ) ); ?>
			<span class="entry-author"><?php the_author_posts_link(); ?></span><br/>
			<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink();?>"><time class="entry-published updated" datetime="<?php echo get_the_time( 'Y-m-d\TH:i:sP' ); ?>"><?php echo get_the_date(); ?></time></a>
		</div><!-- .entry-byline -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php tamatebako_comments_link(); ?>
			<?php if( is_singular() ){?>
				<?php tamatebako_entry_terms(); ?>
				<?php edit_post_link(); ?>
			<?php } ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php if( is_singular() ){
	tamatebako_entry_nav();
	comments_template( '', true ); // Load comments.
} ?>