<?php
/**
 * THEME custom field (metabox) for YouTube URL
 *
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0.0
 */

// Initialisation de la metabox
add_action('add_meta_boxes','init_youtube_metabox');
function init_youtube_metabox(){
  add_meta_box('id_iframe', 'Insérer une URL YouTube', 'insert_iframe', 'produits', 'advanced', 'high');
}
// Construction de la metabox
function insert_iframe($post){
  $url = get_post_meta($post->ID,'_id_iframe',true);
  echo '<label for="iframe">Code d\'intégration : </label>';
  echo '<input id="iframe" type="text" size="100%" name="iframe" value="'.$url.'" />';
  echo '<br><br>';
}
// Sauvegarde des données de la metabox
add_action('save_post','save_youtube_metabox');
function save_youtube_metabox($post_id){
if(isset($_POST['iframe']))

	$url = $_POST['iframe'];
	$pos1 = stripos($url,'youtube.com');
	$pos2 = stripos($url,'youtu.be');

	if( $pos1 != false || $pos2 != false ){// if is youtube url
	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
	$youtube_url = '<iframe width="100%" height="415" src="https://www.youtube.com/embed/'.$match[1].'" frameborder="0" allowfullscreen></iframe>';
	update_post_meta($post_id, '_id_iframe', esc_html($youtube_url));
    } elseif ( empty($url) ){// if is empty
		update_post_meta($post_id, '_id_iframe', 'insérez votre url YouTube ici !');
	} elseif ( $pos1 === false || $pos2 === false ){// if is not a youtube url
		update_post_meta($post_id, '_id_iframe', 'URL invalide !');
	}
}


// Code à insérer dans le template pour l'affichage
/*  $youtube_embed = get_post_meta($post->ID, '_id_iframe', true);
	if (!empty($youtube_embed) && $youtube_embed != 'insérez votre url YouTube ici !' && $youtube_embed != 'URL invalide !') {
		echo html_entity_decode(get_post_meta($post->ID, '_id_iframe', true));
	} else echo '<br><br>Aucune bande-annonce à afficher !';   */
						