<?php
/**
 * The single product page
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
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
            <div class="col-md-8 mb-4">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                    the_post_thumbnail( 'medium_large', ['class' => 'img-fluid'] );
                    the_content();
                    
                endwhile; else:
                    echo '<p>Aucun contenu à afficher !</p>';
                endif;
            ?>
            </div>
			<!-- SIDEBAR -->
			<div class="col-md-4 mb-4">
				<h4 class="my-3">INFORMATIONS PRODUIT</h4>
				
			
                <p class="product">
                    <i class="far fa-building"></i><?php echo strip_tags( get_the_term_list( $post->ID, 'marque', 'Constructeur  : ') )?><br>
					<i class="far fa-calendar-alt"></i><?php echo strip_tags( get_the_term_list( $post->ID, 'annees', 'Année de sortie : ') )?><br>
					<i class="fas fa-medkit"></i><?php the_terms( $post->ID, 'garantie', 'Garantie : ')?><br>
					<!--brand icon-->
					<i class="fas fa-code-branch"></i> Version : <strong>Edition Digitale</strong><br>
					<i class="fas fa-euro-sign"></i><?php echo strip_tags( get_the_term_list( $post->ID, 'prix', 'Tarif : ','', ' €') )?><br>
                </p>

				<button class="btn btn-outline-primary btn-block" type="button">Réservez-la maintenant !</button>

            </div>
			
        </div>
    </div>
	<!-- PAGE CONTENT END -->
   
<?php
    get_template_part('template-parts/content-banner');
get_footer();
