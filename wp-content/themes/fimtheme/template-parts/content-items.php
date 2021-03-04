    <!-- ITEMS -->
    <div class="container mt-5">
        <div class="col-md-12">
			<h2 class="display-4 text-center mb-5">Nos produits</h2>
		</div>
        <div class="row justify-content-md-center">
            
            <?php 
			$argsfrontsitem = array (
				'post_type'             => 'produits',
                'post_status'           => 'publish',
				'posts_per_page'		=> 6
			);

			$frontitem = new WP_Query( $argsfrontsitem );

			if ( $frontitem->have_posts() ) : while ( $frontitem->have_posts() ) : $frontitem->the_post();
			?>
            <div class="card col-md-6 col-lg-4 myitems border-0 mb-4">
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'custom-thumb', ['class' => 'card-img-top'] ); ?> 
                <div class="card-body text-center">
                    <h3 class="card-title"><?php echo strtoupper(get_the_title()); ?></h3>
                </div>
				</a>
            </div>
            <?php
                endwhile; else:
                    echo '<p>Aucun produits à afficher !</p>';
				endif;
				wp_reset_postdata();
            ?>


        </div>
    </div>
	<!-- ITEMS END -->