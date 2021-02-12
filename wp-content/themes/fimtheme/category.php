<?php
/**
 * The template for displaying all posts
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */
get_header();

$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;
?>
    <!-- SUBMENU H1 -->
	<div class="container-fluid p-0 mt-4 text-center submenu">
		<h1><?php echo get_cat_name($category_id = $cat_id); ?></h1>
	</div>
	<!-- IMG + H1 END -->
	
    <!-- PAGE CONTENT -->
    <div class="container mt-5">
        <div class="row justify-content-md-center no-gutters">
            
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-2 my-4">
              <?php
				if ( has_post_thumbnail() ){
					the_post_thumbnail( 'thumbnail', ['class' => 'card-img'] );
				} else {
					echo '<img width="150" height="150" class="card-img" src="'. get_template_directory_uri() .'/assets/img/slide-play-nolimit-150x150.jpg" alt="Astuces console" loading="lazy">';
				}
				
				?>
			</div>
			<div class="col-md-10 mb-4">
			  <div class="card-body">
				<h5 class="card-title"><?php the_title(); ?></h5>
				<p class="card-text"><?php echo get_the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" title="Titre" class="btn btn-dark float-right">en savoir +</a>
			  </div>
            </div>
        <?php endwhile; else:
            echo '<p>Aucun contenu à afficher !</p>';
        endif;
        ?> 

        </div>
		
		<div class="row justify-content-center my-4">
			<nav class="paginate">
                <?php
                    the_posts_pagination(array(
                        'prev_text'=>__('&laquo', 'fimtheme'),
                        'next_text'=>__('&raquo', 'fimtheme'),
                        'screen_reader_text'=>__(' ', 'fimtheme'),
                    ));
                ?>
			</nav>
		</div>

    </div>
	<!-- PAGE CONTENT END -->>
<?php
    get_template_part('template-parts/content-banner');
get_footer();
