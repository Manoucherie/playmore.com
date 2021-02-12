<?php

/**
 * The template for displaying Custom Post Type PRODUITS fo this Theme
 *
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */
// Register Custom Post Type
if(!function_exists('item_cpt')):
function item_cpt() {

	$labels = array(
		'name'                  => _x( 'Produits', 'Post Type General Name', 'fimtheme' ),
		'singular_name'         => _x( 'produit', 'Post Type Singular Name', 'fimtheme' ),
		'menu_name'             => __( 'Produits', 'fimtheme' ),
		'name_admin_bar'        => __( 'Produits', 'fimtheme' ),
		'archives'              => __( 'Item Archives', 'fimtheme' ),
		'attributes'            => __( 'Item Attributes', 'fimtheme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fimtheme' ),
		'all_items'             => __( 'Tous les produits', 'fimtheme' ),
		'add_new_item'          => __( 'Ajouter un produit', 'fimtheme' ),
		'add_new'               => __( 'Ajouter', 'fimtheme' ),
		'new_item'              => __( 'Nouveau produit', 'fimtheme' ),
		'edit_item'             => __( 'Edit Item', 'fimtheme' ),
		'update_item'           => __( 'Mettre à jour ', 'fimtheme' ),
		'view_item'             => __( 'View Item', 'fimtheme' ),
		'view_items'            => __( 'View Items', 'fimtheme' ),
		'search_items'          => __( 'Search Item', 'fimtheme' ),
		'not_found'             => __( 'Not found', 'fimtheme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fimtheme' ),
		'featured_image'        => __( 'Featured Image', 'fimtheme' ),
		'set_featured_image'    => __( 'Set featured image', 'fimtheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'fimtheme' ),
		'use_featured_image'    => __( 'Use as featured image', 'fimtheme' ),
		'insert_into_item'      => __( 'Insert into item', 'fimtheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fimtheme' ),
		'items_list'            => __( 'Items list', 'fimtheme' ),
		'items_list_navigation' => __( 'Items list navigation', 'fimtheme' ),
		'filter_items_list'     => __( 'Filter items list', 'fimtheme' ),
	);
	$args = array(
		'label'                 => __( 'produit', 'fimtheme' ),
		'description'           => __( 'Permet de déposer des produits', 'fimtheme' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'revision', 'author', 'excerpt', 'thumbnails', 'custom-fields'),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'query_var'             => true,
		'rewrite'               => array('slug' => 'produits'),

	);
	register_post_type( 'produits', $args );
	flush_rewrite_rules();

}
add_action( 'init', 'item_cpt', 0 );
endif;