<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

	<!-- <p>Content-products-single.php</p> -->

	<!-- page title -->
	
		<?php the_title('<h2>','</h2>'); ?>
	

	<!-- content -->
	<article <?php post_class(); ?> id="post-
		<?php the_ID(); ?>">

		<div class="row">
			<div class="col-sm-7">
				<!-- show content on the left -->
				<h4><strong> Pris : <?php the_field('price'); ?> kr / styck </strong></h4>
				<h4>Produktbeskrivning : </h4><?php the_content();?>
				<h4>Recension : 
				<?php 
				$rate = get_field('grade');
				for ($i = 0; $i <= $rate; $i++) { 
					echo "<span class='fa fa-pagelines'></span>";
				}
				?>
				</h4>

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

				<a href="<?php echo get_post_type_archive_link( 'products' ); ?>" class="btn btn-info"> Till produkter arkiv</a>


			</div>
			<!-- .col-sm-7 -->

			<div class="col-sm-5">
				<!-- show image on the right -->
				<div class="text-center">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
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
								'post_type' => 'Products',	
								'orderby' => 'title',
								// 'order'   => 'ASC',
								'post_per_page' => 4,
										
							]);
					
							if ($articles->have_posts()) :
								?>
					
							<?php while ($articles->have_posts()) : ?>
							<?php $articles->the_post(); ?>
									<div class="col-sm">

										<!-- if the post has feature image -->
										<?php if (has_post_thumbnail()) {
										the_post_thumbnail('thumbnail');
										
										} else {
											
											the_excerpt();
										}
											?>

									<h5>
											<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
											</a>
										</h5>
	
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