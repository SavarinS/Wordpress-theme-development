<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	<div class="row">
		<div class="col-sm-6">
			
			<!-- show introduction -->
			<?php the_content(); ?>
		</div>
		<div class="col-sm-6">
			<?php the_post_thumbnail('large'); ?><br>
			<a href="<?php echo get_post_type_archive_link( 'contact' ); ?>" class="btn btn-info"> Till kontakt och om oss</a>
		</div>
	</div>


	<!-- start content -->
	<article <?php post_class(); ?> id="post-
		<?php the_ID(); ?>">
		
		<div class="row ">
			<!-- tel. -->
			<div class="col-sm">
			<h4>Telephone : </h4>
				<h5>
					<?php the_field('telephone'); ?>
				</h5>
			</div>

			<!-- e-mail -->
			<div class="col-sm">
			<h4>E-post : </h4>
				<h5>
					<?php the_field('email'); ?>
				</h5>
			</div>

			<!-- address -->
			<div class="col-sm">
			<h4>Adress : </h4>
				<h5>
					<?php the_field('address'); ?>
				</h5>
			</div>
		
			<div class="col-12">
				<h4>Skicka meddelande till oss</h4>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Namn">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="E-post">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Telfonnummer">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Meddelande">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>


		</div>












		<footer class="entry-footer">

			<?php //understrap_entry_footer(); ?>

		</footer>
		<!-- .entry-footer -->

	</article>
	<!-- #post-## -->