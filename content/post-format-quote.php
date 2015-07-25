<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<?php if( is_singular() ){?>
		<div class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</div><!-- .entry-header -->
		<?php } ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<div class="entry-footer">
			<div class="entry-byline">
				<?php if( is_singular() ){?>
					<span class="entry-author"><?php the_author_posts_link(); ?></span>
				<?php } ?>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
				<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink();?>"><time class="entry-published updated" datetime="<?php echo get_the_time( 'Y-m-d\TH:i:sP' ); ?>"><?php echo get_the_date(); ?></time></a>
			</div><!-- .entry-byline -->
			<?php if( is_singular() ){?>
				<?php tamatebako_entry_terms(); ?>
			<?php } ?>
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php if( is_singular() ){ ?>
	<?php tamatebako_entry_nav(); ?>
	<?php comments_template( '', true ); // Load comments. ?>
<?php } ?>