<?php
/*
* Template Name: Modèle de page Login
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
            <div class="col-6 mb-4">
            <?php
                if ( ! is_user_logged_in() && ! current_user_can( 'manage_options' ) ) {
                    wp_login_form( array (
                        'redirect'  => admin_url()
                    ) );

                    echo '<br><br><a href="'. wp_lostpassword_url() .'"> Mot de passe oublié ? </a>';
                } else {
                    echo '<br><br><a href="'. wp_logout_url( home_url() ) .'"> Déconnexion </a>';
                }

                
                

            ?>
            </div>
        </div>
    </div>
	<!-- PAGE CONTENT END -->
<?php
    get_template_part('template-parts/content-banner');
get_footer();
