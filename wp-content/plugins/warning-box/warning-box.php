<?php
/*
Plugin Name: Warning Box
Plugin URI: https://www.winastuce.com
Description: Affichage d'un message d'alerte pour signifier que ce site est réalisé à des fins pédagogiques
Version: 1.2
Author: GiZmoDev
Author URI: https://www.winastuce.com
Plugin URI: https://www.winastuce.com
Text Domain: warning-box
Domain Path: /lang
License: GPL2

Copyright 2021 GiZmODev (email : contact@winastuce.com)

This script is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This script is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

/*=======================================
Warning Box
=======================================*/
	add_action( 'get_header', 'wp_body_open_buffer' );
	function wp_body_open_buffer() {
		ob_start();
		do_action( 'wp_body_open' );
		$wp_body_open_content = ob_get_clean();

		ob_start( function( $buffer ) use( $wp_body_open_content ) {
			return preg_replace( '(<body.*>)', "$0\n$wp_body_open_content", $buffer );
		} );
	}
	add_action( 'wp_enqueue_scripts', 'w_register_styles' );
	function w_register_styles() {
		// Librairies CSS
		wp_enqueue_style('warning-style', plugins_url('warning.min.css', __FILE__ ),false,'2','all');
	}
	add_action( 'wp_body_open', 'after_body_open' );
	function after_body_open() {
		if ( !is_user_logged_in() ) {
		?>
		<a href="#popupfim"><div class="corner-ribbon bottom-left sticky blue shadow"><span>Site à vocation pédagogique</span></div></a>
		<div id="popupfim" class="popup">
		  <a href="#" class="close">&times;</a>
		  <h2>AVERTISSEMENT</h2>
		  <p>Merci de noter que ce site a été créer dans un but purement pédagogique par des étudiants de la filière digitale du centre de formation FIM CCI Normandie.</p>
		</div>
		<a href="#" class="close-popup"></a>
		<?php
		}
	}
?>
