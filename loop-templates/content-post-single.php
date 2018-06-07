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

		
		
	

		


		<footer class="entry-footer">

			<?php //understrap_entry_footer(); ?>

		</footer>
		<!-- .entry-footer -->

	</article>
	<!-- #post-## -->