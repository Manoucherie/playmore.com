<?php
/**
 * Theme custom field (metabox) for item version
 * 
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */

// Initialisation de la metabox
function init_metabox(){
    add_meta_box( 'item_version', 'Description de la version du produit', 'insert_version', 'produits', 'advanced', 'high' );
}
add_action( 'add_meta_boxes', 'init_metabox' );

// Contruction de la metabox
function insert_version($post){
    $version = get_post_meta($post->ID, '_item_version', true );
    echo '<label for="version">Version du produit : </label>';
    echo '<input id="version" type="text" size="100%" name="version" value="'. $version .'" />';
}

// Sauvegarde des données de la metabox
function save_metabox($post_id){
    if (isset($_POST['version']))
        update_post_meta( $post_id, '_item_version', esc_html($_POST['version']) );
}
add_action( 'save_post', 'save_metabox' );
