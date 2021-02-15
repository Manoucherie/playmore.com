	<!-- TIPS -->
	<div class="container my-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="display-4 text-center mb-5"><?php echo category_description(4); ?></h2>
			</div>

			<?php 
			$recentargs = array (
				'category_name' 		=> 'astuces',
				'posts_per_page'		=> 3
			);

			$recentPosts = new WP_Query( $recentargs );

			if ( $recentPosts->have_posts() ) : while ( $recentPosts->have_posts() ) : $recentPosts->the_post();
			?>

			<div class="col-lg-4">
			  <div class="card mb-4 shadow-sm">
				<?php
				if ( has_post_thumbnail() ){
					the_post_thumbnail( 'custom-thumb', ['class' => 'img-fluid mx-auto'] );
				} else {
					echo '<img class="img-fluid mx-auto" src="'. get_template_directory_uri() .'/assets/img/slide-play-nolimit-350x200.jpg" alt="Astuces console" loading="lazy">';
				}
				
				?>
				<div class="card-body">
					<h3 class="card-title text-truncate"><?php the_title(); ?></h3>
				  <?php the_excerpt(); ?>
				  <div class="d-flex justify-content-between align-items-center float-right">
					<div class="btn-group">
					  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true">lire la suite...</a>
					</div>
				  </div>
				</div>

			  </div>
			</div>
                    
            <?php    endwhile; else:
                    echo '<p>Aucun contenu à afficher !</p>';
				endif;
				wp_reset_postdata();
            ?>



		</div>
	</div>
	<!-- TIPS END -->
