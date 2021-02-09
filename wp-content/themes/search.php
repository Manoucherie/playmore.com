<?php
/*
Template Name: Search Page results
*/
get_header();
?>
    <!-- SUBMENU H1 -->
	<div class="container-fluid p-0 mt-4 text-center submenu">
		<h1>Résultats pour la recherche : <?php echo esc_html(get_search_query()); ?></h1>
	</div>
	<!-- IMG + H1 END -->
	
    <!-- PAGE CONTENT -->
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col mb-4">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>

            <p><a class="text-secondary text-decoration-none" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
      
            <?php        
                endwhile; else:
                    echo '<p>Désolé, aucun résultat pour cette recherche !</p>';
                endif;
            ?>
            </div>
        </div>
    </div>
	<!-- PAGE CONTENT END -->
<?php
    get_template_part('template-parts/content-banner');
get_footer();
