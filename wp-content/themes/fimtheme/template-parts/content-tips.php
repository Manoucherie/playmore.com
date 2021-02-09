	<!-- TIPS -->
	<div class="container my-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="display-4 text-center mb-5">Tips & Tricks</h2>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('custom-thumb', ['class' => 'img-fluid mx-auto']);
                    } else {
                        echo '<img src="'.get_template_directory_uri().'/assets/img/slide-play-nolimit-350x200.jpg" alt="Astuce console" loading="lazy">';
                    }
                    ?>
                    <div class="card-body">
                        <h3><?php the_title(); ?></h3>
                        <p class="card-text"><?php echo the_excerpt(); ?></p>
                        <div class="d-flex justify-content-between align-items-center float-right">
                            <div class="btn-group">
                                <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true">lire la suite...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
			endwhile; else:
				echo '<p>Aucun contenu à afficher !</p>';
			endif;
			?>

		</div>
	</div>
	<!-- TIPS END -->