<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<p>content-page.php</p>
<article <?php post_class('col-sm-4'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<!-- show titles -->
		<?php the_title( sprintf( '<h5 class="text-center"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h5>' ); ?>
		
		<!-- show content in block -->            
				<div class="text-center">
				<!-- if the post has feature image -->
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail('medium');

				} else {
					
					the_excerpt();
				}
					?>

				<!-- show categoey -->
				<p><?php the_taxonomies();?></p>

					<?php if ( 'post' == get_post_type() ) : ?>

					<div class="entry-meta">
						<?php //understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>
				</div>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		//the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php //understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
