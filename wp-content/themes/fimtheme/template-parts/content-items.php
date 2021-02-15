    <!-- ITEMS -->
    <div class="container mt-5">
        <div class="col-md-12">
			<h2 class="display-4 text-center mb-5">Nos produits</h2>
		</div>
    

        <div class="row justify-content-md-center">
        <?php
        $argsitem = array (
            'post_type'		        => 'produits',
            'post_status'		    => 'publish',
            'posts_per_page'		=> 6,
        );

        $allitem = new WP_Query( $argsitem );

        if ( $allitem->have_posts() ) : while ( $allitem->have_posts() ) : $allitem->the_post();
        ?>
        <div class="card col-md-6 col-lg-4 myitems border-0 mb-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'custom-thumb', ['class' => 'card-img'] ); ?>
            </a>
            <div class="card-body text-center">
                <h3><?php echo the_title(); ?></h3>
            </div>
        </div>

        <?php    endwhile; else:
                echo '<p>Aucun contenu à afficher !</p>';
            endif;
            wp_reset_postdata();
        ?>
        </div>
    </div>
	<!-- ITEMS END -->