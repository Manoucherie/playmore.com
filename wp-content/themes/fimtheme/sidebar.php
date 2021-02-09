<?php
/**
 * The template for displaying sidebar section
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */
?>
			<div class="col-md-3 mb-4">
				<h4 class="mt-3">SIDEBAR</h4>
				<div class="widget-sidebar sidebar-search">
					<h5 class="sidebar-title">Recherche</h5>
					<div class="sidebar-content">
                        <?php get_search_form(); ?>
					</div>
				</div>
                <?php
                if( is_active_sidebar( 'sidebar-1' )) :
                    dynamic_sidebar( 'sidebar-1' );
                endif;
                ?>
            </div>