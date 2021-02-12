<?php
/*
* Template Name: Modèle de page Statistiques
* Template Post Type: page
*/
get_header();
?>
<div class="container-fluid p-0 mt-4 text-center submenu">
    <h1><?php the_title(); ?></h1>
</div>
<!-- IMG + H1 END -->

<!-- PAGE CONTENT -->
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col mb-4">

            <div class="wp-block-contact-form-7-contact-form-selector">
                <div role="form" class="wpcf7" id="wpcf7-f82-p85-o1" lang="fr-FR" dir="ltr">
                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/contact/#wpcf7-f82-p85-o1" method="post" class="wpcf7-form init"
                          novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="82"/>
                            <input type="hidden" name="_wpcf7_version" value="5.3.2"/>
                            <input type="hidden" name="_wpcf7_locale" value="fr_FR"/>
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f82-p85-o1"/>
                            <input type="hidden" name="_wpcf7_container_post" value="85"/>
                            <input type="hidden" name="_wpcf7_posted_data_hash" value=""/>
                        </div>
                        <div class="row">
                            <div class="col md-6">
		                        <?php echo do_shortcode('[contact-form-7 id="82" title="Contact form 1"]'); ?>
                            </div>
                            <div class="col md-6">
		                        <?php echo do_shortcode('[contact-form-7 id="82" title="Contact form 1"]'); ?>
                            </div>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>