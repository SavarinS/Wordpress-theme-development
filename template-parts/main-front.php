



			<?php
			// get any kind of post 
			$tasks = new WP_Query([
				'post_type' => 'any',	
				'orderby' => 'post_title',	
				 'order' => 'ASC',			
				'posts_per_page' => 9,
				'post__not_in' => array('2, 59')	
			]);

			

			if ($tasks->have_posts()) :
				?>
					
						<?php while ($tasks->have_posts()) : ?>
							<?php $tasks->the_post(); ?>
							<div class="col-sm-4 text-center">
							
									<h5 class="main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<!-- show taxonomies -->
									<?php the_taxonomies(); ?>
										<!-- if the post has feature image -->
										<?php if (has_post_thumbnail()) {
											the_post_thumbnail('medium');

										} else {
											
											the_excerpt();
										}
											?>
									
							</div>
								
						<?php endwhile; ?>
					
				<?php
			endif;
		?>
		
