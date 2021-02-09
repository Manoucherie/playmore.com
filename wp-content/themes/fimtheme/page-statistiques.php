<?php
/*
* Template Name: Modèle de page Statistiques
* Template Post Type: page
*/
get_header();
?>
    <!-- SUBMENU H1 -->
	<div class="container-fluid p-0 mt-4 text-center submenu">
		<h1><?php the_title(); ?></h1>
	</div>
	<!-- IMG + H1 END -->
	
    <!-- PAGE CONTENT -->
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-4 mb-4">

            <p><b>Nom du blog : </b><?php bloginfo( 'name' ); ?></p>
            <p><b>Version WP  : </b><?php bloginfo( 'version' ); ?></p>

            <p><b>Nbre d'articles  : </b><?php echo wp_count_posts()->publish; ?></p>
            <p><b>Nbre de pages    : </b><?php echo wp_count_posts( 'page' )->publish; ?></p>

            </div>
            <div class="col-8 mb-4">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                    the_content();
                    
                endwhile; else:
                    echo '<p>Aucun contenu à afficher !</p>';
                endif;
            ?>
            </div>
        </div>
    </div>
	<!-- PAGE CONTENT END -->
<?php

get_footer();
