<?php
/**
 * The template for displaying all products
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */
get_header();
$brand = get_term_by( 'name', single_cat_title( '', false ), 'marque' );
$brandname = $brand->name;
?>
    <!-- SUBMENU H1 -->
	<div class="container-fluid p-0 mt-4 text-center submenu">
		<h1><?php echo $brandname; ?></h1>
	</div>
	<!-- IMG + H1 END -->
	
    <!-- PAGE CONTENT -->
    <div class="container mt-5">
		<div class="row">
			<div class="col-12 mb-4">

            <?php
            $terms = get_terms( 'marque', array (
				'order'             => 'ASC',
                'hide_empty'           => true
            ) );

            if ( ! empty ( $terms ) && ! is_wp_error( $terms ) ) {
                echo '<a href="'. site_url( '/produits' ) .'" class="btn btn-outline-primary mr-1" role="button" aria-pressed="true">Tout</a>';
                foreach ( $terms as $term ) {
                    echo '<a href="'. esc_url ( get_term_link( $term ) ) .'" class="btn btn-outline-primary mr-1" role="button" aria-pressed="true">'. $term->name .'</a>';
                }
            }
            ?>

			</div>
		</div>
        <div class="row justify-content-md-center">

        <?php 
			$argsbranditem = array (
				'post_type'             => 'produits',
                'post_status'           => 'publish',
				'posts_per_page'		=> -1,
                'tax_query'             => array(
                    array (
                            'taxonomy'          => 'marque',
                            'field'             => 'slug',
                            'terms'             => $brandname,
                    )
                )
			);

			$branditem = new WP_Query( $argsbranditem );

			if ( $branditem->have_posts() ) : while ( $branditem->have_posts() ) : $branditem->the_post();
			?>

			<div class="col-md-4 mb-5 img-hover-zoom">
				<a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail( 'custom-thumb', ['class' => 'card-img'] ); ?> 
                </a>
			</div>

            <?php
                endwhile; else:
                    echo '<p>Aucun contenu à afficher !</p>';
				endif;
				wp_reset_postdata();
            ?>

        </div>
    </div>
	<!-- PAGE CONTENT END -->
<?php
    get_template_part('template-parts/content-banner');
get_footer();
