<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

	<!-- <p>Content-gardening.php</p> -->

	<!-- page title -->
	
		<?php the_title('<h2>', '</h2>'); ?>

	<!-- content -->
	<article <?php post_class(); ?> id="post-
		<?php the_ID(); ?>">

		<div class="row">
			<div class="col-sm-7">
				<!-- show content on the left -->
				<?php the_content();?>

				<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta">
					<?php //understrap_posted_on(); ?>
				</div>
				<!-- .entry-meta -->

				<?php endif; ?>

				<!-- show social media -->
				<div class="social-media" style="font-size:3em; color:Tomato">
					<h4>Dela inlägg</h4>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-facebook-square"></i>
					<i class="fa fa-google-plus-square"></i>
					<i class="fa fa-envelope"></i>
				</div>


			</div>
			<!-- .col-sm-7 -->

			<div class="col-sm-5 ">
				<!-- show image on the right -->
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail('large');

					} else {
											
					the_field('video');
					}
					?>
				<!-- buttin -->
				<div class="text-center">
				<a href="<?php echo get_post_type_archive_link( 'gardening' ); ?>" class="btn btn-info"> Till trädgård arkiv</a>
				</div>
				<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>

			</div>
			<!-- .col-sm-5 -->
		</div>
		<!-- .row -->
		<hr>

		<div class="container">
				<h4>Relaterade artiklar</h4>
				<div class="row text-center">
					
						<?php
				// get Gardening custom post type with specific id
							$articles = new WP_Query([
								'post_type' => 'Gardening',	
								'orderby' => 'title',
								'order'   => 'ASC',
								'post_per_page' => 4,
										
							]);
					
							if ($articles->have_posts()) :
								?>
					
							<?php while ($articles->have_posts()) : ?>
							<?php $articles->the_post(); ?>
									<div class="col-sm">
									
										<h5>
											<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
											</a>
										</h5>

										<!-- if the post has feature image -->
										<?php if (has_post_thumbnail()) {
										the_post_thumbnail('thumbnail');
										
										} else {
											
											the_excerpt();
										} 
											?>
	
									</div><!-- .card-body-->
							<?php endwhile; ?>
							<?php
						endif;
						?>
				</div><!-- .row -->

			

		</div><!-- .container -->

		
	

		


		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer>
		<!-- .entry-footer -->

	</article>
	<!-- #post-## -->