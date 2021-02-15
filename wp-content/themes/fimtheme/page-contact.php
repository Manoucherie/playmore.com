<?php
/*
* Template Name: Modèle de page contact
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

			<div class="col-md-6 mb-5">
				<iframe width="500" height="440" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-1.396636962890625%2C48.98247022887956%2C-0.8232879638671876%2C49.18080571099239&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/>
			</div>
			<div class="col-md-6">
                <?php echo do_shortcode( '[contact-form-7 id="87" title="Contact"]' ); ?>
			</div>
				
        </div>
    </div>
	<!-- PAGE CONTENT END -->
<?php
    get_template_part('template-parts/content-banner');
get_footer();
