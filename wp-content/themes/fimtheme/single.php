<?php
/**
 * The template for displaying single pages
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
            <div class="col-md-9 mb-4">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    echo '<p>This post was written by <b>'. get_the_author() .'</b></p>';
                    the_post_thumbnail( 'single-thumb', ['class' => 'img-fluid'] );
                    the_content();
                    
                endwhile; else:
                    echo '<p>Aucun contenu à afficher !</p>';
                endif;
            
            ?>
            
				
				<div class="social-bloc mt-5">
					<ul class="social-share">
						<li class="heading">Partager :</li>
						<li><div class="facebook-social"><a class="facebook" title="Partager sur Facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://www.monsite.com/mapage" target="_blank" rel="external nofollow noopener"><i class="fab fa-facebook"></i></a></div></li>
						<li><div class="twitter-social"><a class="twitter" title="Partager sur Twitter" href="https://twitter.com/share?url=http://www.monsite.com/mapage&amp;text=titredemapage" target="_blank" rel="external nofollow noopener"><i class="fab fa-twitter"></i></a></div></li>
						<li><div class="linkedin-social"><a class="linkedin" title="Partager sur LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.monsite.com/mapage&amp;title=titredemapage" target="_blank" rel="external nofollow noopener"><i class="fab fa-linkedin-in"></i></a></div></li>
						<li><div class="pinterest-social"><a class="pinterest" title="Partager sur Pinterest" href="http://pinterest.com/pin/create/button/?url=http://www.monsite.com/mapage&amp;description=descriptiondemapage&amp;media=http://www.monsite.com/monimage.jpg" target="_blank" rel="external nofollow noopener"><i class="fab fa-pinterest"></i></a></div></li>
						<li><div class="email-social"><a class="email" title="Partager via email" href="mailto:?subject=titredemapage&amp;body=titredemapage http://www.monsite.com/mapage" target="_blank" rel="external nofollow noopener"><i class="fas fa-envelope"></i></a></div></li>
					</ul>
                </div>
                
                <?php
                    echo '<div class="col-4 mb-4 nextprev">';
                    previous_post_link('%link', '<<< Article précédent', true);
                    echo '</div>';
                    echo '<div class="col-4 mb-4 nextprev">';
                    next_post_link('%link', 'Article suivant >>>', true);
                    echo '</div>';
                
                if ( comments_open() || get_comments_number() ){
                    comments_template(); 
                }
                

                
                
                ?>

            </div>

			
			<!-- SIDEBAR -->
            <?php get_sidebar(); ?>
			
        </div>
    </div>
	<!-- PAGE CONTENT END -->

<?php
    get_template_part('template-parts/content-banner');
get_footer();
