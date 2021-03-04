<?php
/**
 * The template for displaying Custom Post Type PRODUITS for this Theme
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */

// Register Custom Post Type
if ( ! function_exists('item_cpt') ) :
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
            'update_item'           => __( 'Mettre à jour', 'fimtheme' ),
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
            'label'                 => __( 'produits', 'fimtheme' ),
            'description'           => __( 'Permet de déposer des produits', 'fimtheme' ),
            'labels'                => $labels,
            'supports'              => array ( 'title', 'editor', 'revisions', 'author', 'excerpt', 'thumbnail', 'custom-fields'),
            'taxonomies'            => array( 'marque', 'annees', 'garantie', 'prix' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'show_in_rest'          => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'menu_icon'             => 'dashicons-welcome-widgets-menus',
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'produits' ),
        );
        register_post_type( 'produits', $args );
        flush_rewrite_rules();
    }
    add_action( 'init', 'item_cpt', 10 );
endif;

// Register Custom Taxonomy
if ( ! function_exists('item_taxonomy') ) :
function item_taxonomy() {

    // Register Taxonomy Marques
	$labels_mark = array(
		'name'                       => _x( 'Marque', 'Taxonomy General Name', 'fimtheme' ),
		'singular_name'              => _x( 'marque', 'Taxonomy Singular Name', 'fimtheme' ),
		'menu_name'                  => __( 'Marque', 'fimtheme' ),
		'all_items'                  => __( 'All Items', 'fimtheme' ),
		'parent_item'                => __( 'Parent Item', 'fimtheme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'fimtheme' ),
		'new_item_name'              => __( 'New Item Name', 'fimtheme' ),
		'add_new_item'               => __( 'Ajouter une marque', 'fimtheme' ),
		'edit_item'                  => __( 'Edit Item', 'fimtheme' ),
		'update_item'                => __( 'Update Item', 'fimtheme' ),
		'view_item'                  => __( 'View Item', 'fimtheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'fimtheme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'fimtheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'fimtheme' ),
		'popular_items'              => __( 'Popular Items', 'fimtheme' ),
		'search_items'               => __( 'Search Items', 'fimtheme' ),
		'not_found'                  => __( 'Not Found', 'fimtheme' ),
		'no_terms'                   => __( 'No items', 'fimtheme' ),
		'items_list'                 => __( 'Items list', 'fimtheme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'fimtheme' ),
	);
	$args_mark = array(
		'labels'                     => $labels_mark,
		'hierarchical'               => false,
		'public'                     => true,
        'show_in_rest'               => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'query_var'                  => true,
        'rewrite'                    => array( 'slug' => 'marque' ),
	);
	register_taxonomy( 'marque', array( 'produits' ), $args_mark );

    // Register Taxonomy Année
	$labels_annee = array(
		'name'                       => _x( 'Années', 'Taxonomy General Name', 'fimtheme' ),
		'singular_name'              => _x( 'Année', 'Taxonomy Singular Name', 'fimtheme' ),
		'menu_name'                  => __( 'Années', 'fimtheme' ),
		'all_items'                  => __( 'All Items', 'fimtheme' ),
		'parent_item'                => __( 'Parent Item', 'fimtheme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'fimtheme' ),
		'new_item_name'              => __( 'New Item Name', 'fimtheme' ),
		'add_new_item'               => __( 'Ajouter une année de production', 'fimtheme' ),
		'edit_item'                  => __( 'Edit Item', 'fimtheme' ),
		'update_item'                => __( 'Update Item', 'fimtheme' ),
		'view_item'                  => __( 'View Item', 'fimtheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'fimtheme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'fimtheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'fimtheme' ),
		'popular_items'              => __( 'Popular Items', 'fimtheme' ),
		'search_items'               => __( 'Search Items', 'fimtheme' ),
		'not_found'                  => __( 'Not Found', 'fimtheme' ),
		'no_terms'                   => __( 'No items', 'fimtheme' ),
		'items_list'                 => __( 'Items list', 'fimtheme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'fimtheme' ),
	);
	$args_annee = array(
		'labels'                     => $labels_annee,
		'hierarchical'               => false,
		'public'                     => true,
        'show_in_rest'               => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'query_var'                  => true,
        'rewrite'                    => array( 'slug' => 'annees' ),
	);
	register_taxonomy( 'annees', array( 'produits' ), $args_annee );

    // Register Taxonomy Garantie
	$labels_warranty = array(
		'name'                       => _x( 'Garantie', 'Taxonomy General Name', 'fimtheme' ),
		'singular_name'              => _x( 'garantie', 'Taxonomy Singular Name', 'fimtheme' ),
		'menu_name'                  => __( 'Garantie', 'fimtheme' ),
		'all_items'                  => __( 'All Items', 'fimtheme' ),
		'parent_item'                => __( 'Parent Item', 'fimtheme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'fimtheme' ),
		'new_item_name'              => __( 'New Item Name', 'fimtheme' ),
		'add_new_item'               => __( 'Ajouter une durée de garantie', 'fimtheme' ),
		'edit_item'                  => __( 'Edit Item', 'fimtheme' ),
		'update_item'                => __( 'Update Item', 'fimtheme' ),
		'view_item'                  => __( 'View Item', 'fimtheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'fimtheme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'fimtheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'fimtheme' ),
		'popular_items'              => __( 'Popular Items', 'fimtheme' ),
		'search_items'               => __( 'Search Items', 'fimtheme' ),
		'not_found'                  => __( 'Not Found', 'fimtheme' ),
		'no_terms'                   => __( 'No items', 'fimtheme' ),
		'items_list'                 => __( 'Items list', 'fimtheme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'fimtheme' ),
	);
	$args_warranty = array(
		'labels'                     => $labels_warranty,
		'hierarchical'               => false,
		'public'                     => true,
        'show_in_rest'               => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'query_var'                  => true,
        'rewrite'                    => array( 'slug' => 'garantie' ),
	);
	register_taxonomy( 'garantie', array( 'produits' ), $args_warranty );

    // Register Taxonomy Prix
	$labels_price = array(
		'name'                       => _x( 'Prix', 'Taxonomy General Name', 'fimtheme' ),
		'singular_name'              => _x( 'prix', 'Taxonomy Singular Name', 'fimtheme' ),
		'menu_name'                  => __( 'Prix', 'fimtheme' ),
		'all_items'                  => __( 'All Items', 'fimtheme' ),
		'parent_item'                => __( 'Parent Item', 'fimtheme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'fimtheme' ),
		'new_item_name'              => __( 'New Item Name', 'fimtheme' ),
		'add_new_item'               => __( 'Ajouter un prix de vente', 'fimtheme' ),
		'edit_item'                  => __( 'Edit Item', 'fimtheme' ),
		'update_item'                => __( 'Update Item', 'fimtheme' ),
		'view_item'                  => __( 'View Item', 'fimtheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'fimtheme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'fimtheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'fimtheme' ),
		'popular_items'              => __( 'Popular Items', 'fimtheme' ),
		'search_items'               => __( 'Search Items', 'fimtheme' ),
		'not_found'                  => __( 'Not Found', 'fimtheme' ),
		'no_terms'                   => __( 'No items', 'fimtheme' ),
		'items_list'                 => __( 'Items list', 'fimtheme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'fimtheme' ),
	);
	$args_price = array(
		'labels'                     => $labels_price,
		'hierarchical'               => false,
		'public'                     => true,
        'show_in_rest'               => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'query_var'                  => true,
        'rewrite'                    => array( 'slug' => 'prix' ),
	);
	register_taxonomy( 'prix', array( 'produits' ), $args_price );

}
add_action( 'init', 'item_taxonomy', 10 );
endif;