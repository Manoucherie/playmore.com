<?php

/**
 * The template for displaying Custom Post Type PRODUITS for this Theme
 *
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */

function init_metabox() {
	add_meta_box('info_version', 'Description de la version du produit', 'insert_version', 'produits', 'advanced', 'high');
}
add_action('add_meta_boxes', 'init_metabox');

function insert_version($post) {
	$version = get_post_meta($post->ID, 'item_version');
}