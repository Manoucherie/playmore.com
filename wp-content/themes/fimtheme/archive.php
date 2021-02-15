<?php
/**
 * The archive page
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
			<div class="col mb-4">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                    // the_post_thumbnail( 'medium_large', ['class' => 'img-fluid'] );
                    // the_content();
                    the_title();
                    echo '<br>';
                    
                endwhile; else:
                    echo '<p>Aucun contenu à afficher !</p>';
                endif;
            ?>
            </div>
        </div>
    </div>
	<!-- PAGE CONTENT END -->
   
<?php
    get_template_part('template-parts/content-banner');
get_footer();
