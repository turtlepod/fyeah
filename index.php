<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="header-image-container">
		<?php if ( current_theme_supports( 'custom-header' ) && get_header_image() ) { /* Custom Header */ ?>
			<div class="header-image" style="background-image: url( '<?php header_image(); ?>' )"></div>
		<?php } /* end custom header */ ?>
	</div>

	<div id="container">

		<?php get_template_part( 'menu/primary' ); ?>

		<?php tamatebako_skip_to_content(); ?>

		<div class="wrap">

			<div id="main">

				<div class="wrap">

					<?php get_header(); ?>

					<main role="main" class="content" id="content">

						<?php if ( have_posts() ){ /* Posts Found */ ?>

							<?php tamatebako_archive_header(); ?>

							<div class="wrap">

								<?php while ( have_posts() ) {  /* Start Loop */ ?>

									<?php the_post(); /* Load Post Data */ ?>

									<?php /* Start Content */ ?>
									<?php tamatebako_get_template( 'content' ); // Loads the content/*.php template. ?>
									<?php /* End Content */ ?>

								<?php } /* End Loop */ ?>

							</div><!-- #content > .wrap -->

							<?php tamatebako_archive_footer(); ?>

						<?php } else { /* No Posts Found */ ?>

							<div class="wrap">
								<?php tamatebako_content_error(); ?>
							</div><!-- #content > .wrap -->

						<?php } /* End Posts Found Check */ ?>

						<?php get_footer(); ?>

					</main><!-- #content -->

					<?php tamatebako_get_sidebar( 'primary' ); ?>

				</div><!-- #main > wrap -->

			</div><!-- #main -->

		</div><!-- #container > .wrap -->

	</div><!-- #container -->

	<?php wp_footer();?>

</body>
</html>