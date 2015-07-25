<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<?php if( is_singular() ){?>
		<div class="entry-header">
			<?php tamatebako_entry_title(); ?>
			<div class="entry-byline">
				<span class="entry-author"><?php the_author_posts_link(); ?></span>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
				<time class="entry-published updated" datetime="<?php echo get_the_time( 'Y-m-d\TH:i:sP' ); ?>"><?php echo get_the_date(); ?></time>
			</div><!-- .entry-byline -->
		</div><!-- .entry-header -->
		<?php } ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<?php if( is_singular() ){?>
		<div class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_terms(); ?>
		</div><!-- .entry-footer -->
		<?php } ?>

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php if( is_singular() ){ ?>
	<?php tamatebako_entry_nav(); ?>
	<?php comments_template( '', true ); // Load comments. ?>
<?php } ?>