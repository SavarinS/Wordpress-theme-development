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
			<!-- <p>Archive-gardening.php</p> -->

			<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<div class="row">

					<main class="site-main" id="main">

							<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
								the_archive_title( '<h4 class="page-title">', '</h4>' );
								the_archive_description( '<h5><div class="taxonomy-description">', '</h5></div>' );
								?>

							</header>
							<!-- .page-header -->
							<div class="container">
								<div class="row">
									
										<div class="col-sm-8">
											
												<?php /* Start the Loop */ ?>
												<?php while ( have_posts() ) : the_post(); ?>

												<?php

												/*
												* Include the Post-Format-specific template for the content.
												* If you want to override this in a child theme, then include a file
												* called content-___.php (where ___ is the Post Format name) and that will be used instead.
												*/
												get_template_part( 'loop-templates/content', 'documentation' );
												?>

													<?php endwhile; ?>
									
													<?php else : ?>

													<?php get_template_part( 'loop-templates/content', 'none' ); ?>

													<?php endif; ?>
											
										</div>			

									<div class="col-sm-4">
										
											<div class="card border-dark mb-3" style="max-width: 18rem;">
											
												<div class="card-header"><h4>Table of contents</h4></div>
													<div class="card-body text-dark">
														<?php /* Start the Loop */ ?>
														<?php while ( have_posts() ) : the_post(); ?>
														<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
														<?php endwhile; ?>
													</div>
												
													
												</div>
											</div>
										

									</div>
								</div>
							</div><!-- .container -->

					</main>
					<!-- #main -->
				
					<!-- The pagination component -->
					<?php understrap_pagination(); ?>
				</div>
				<!-- .row -->
			</div>
			<!-- .container -->

		</div>
		<!-- Wrapper end -->

		<?php get_footer(); ?>