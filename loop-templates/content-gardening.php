<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<!-- <p>Content-gardening.php</p> -->
<article <?php post_class('col-sm-6'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
	<?php if (has_post_thumbnail()) {
		the_post_thumbnail('medium');

		} else {
											
		the_field('video');
		}
		?>
		
	<!-- show titles -->
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h4>' ); ?>

		<?php the_terms(get_the_ID(), 'inspiration'); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		the_excerpt();
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
