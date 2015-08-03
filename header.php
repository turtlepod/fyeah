<div id="header-wrap">

	<header role="banner" id="header">

		<div id="branding">

			<?php if ( current_theme_supports( 'tamatebako-logo' ) && get_theme_mod( 'logo' ) ) { ?>

				<div id="site-logo">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="logo-img" src="<?php echo esc_url( tamatebako_logo_url() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
					</a>
				</div>

			<?php } // end logo ?>

			<?php if( is_front_page() && is_home() ){ ?>

				<h1 id="site-title"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

			<?php } else { ?>

				<p id="site-title"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>

			<?php } ?>

			<p id="site-description"><?php bloginfo( 'description' ); ?></p>

		</div><!-- #branding -->

		<?php get_template_part( 'menu/social-links' ); ?>

	</header><!-- #header-->

</div><!-- #header-wrap -->