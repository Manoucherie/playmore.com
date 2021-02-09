<?php
/**
 * The template for displaying 404 pages
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */
get_header();
?>

    <!-- PAGE CONTENT -->
    <div class="container-fluid p-0 w-100 position-relative">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/astro-bot-404.jpg" class="img-fluid"  alt="Erreur 404">

			<div class="col col-md-5 position-absolute align-self-end text-white error-box">
				<h1 class="page-title text-center">Oops 404 ! Cette page n'a pas été trouvé</h1>


				<p>Essayez une autre recherche...</p>
                <?php echo get_search_form(); ?>
			</div>

    </div>
	<!-- PAGE CONTENT END -->	

<?php
    get_template_part('template-parts/content-banner');
get_footer();
