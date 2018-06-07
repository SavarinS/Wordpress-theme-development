<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

	<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

		<div class="wrapper" id="archive-wrapper">
			<!-- <p>Archive-products.php</p> -->

			<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<div class="row">

					<main class="site-main" id="main">

						<?php if ( have_posts() ) : ?>

						<header class="page-header">

							<!-- show cover image  -->
						<div class="cover-image-products">
							<h2 class="text-center">Våra produkter</h2>
						</div>


							<?php
						the_archive_title( '<h4 class="page-title">', '</h4>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					
						</header>
						<!-- .page-header -->
						<div class="container">
							<div class="row text-center">
								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>

								<?php

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'products' );
							?>

									<?php endwhile; ?>
							</div>
							<!-- .row -->
						</div>
						<!-- .container -->

						<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

						<?php endif; ?>

					</main>
					<!-- #main -->

					<div class="pagination">
						<!-- The pagination component -->
						<?php understrap_pagination(); ?>
					</div>

				</div>
				<!-- #primary -->


			</div>
			<!-- .row -->

		</div>
		<!-- Container end -->

		</div>
		<!-- Wrapper end -->

		<?php get_footer(); ?>