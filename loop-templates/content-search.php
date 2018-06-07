<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		
		<ul class="list-group">
			<li class="list-group-item list-group-item-info">
				<?php the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></p>' ); ?>

					<?php if ( 'post' == get_post_type() ) : ?>

						<div class="entry-meta">

							<?php //understrap_posted_on(); ?>

						</div><!-- .entry-meta -->

					<?php endif; ?>
			</li>
		</ul>	

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php //the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
