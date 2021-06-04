<?php
/*
Plugin Name:	SS Owl Carousel
Plugin URI:		https://example.com
Description:	This plugin for Owl Carousel load
Version:		1.0.0
Author:			Shemul
Author URI:		http://shemuls.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_files' );
/**
 * Loads <list assets here>.
 */
function custom_enqueue_files() {
	// if this is not the front page, abort.
	// if ( ! is_front_page() ) {
	// 	return;
	// }

	// loads a CSS file in the head.
	wp_enqueue_style( 'highlightjs-css', plugin_dir_url( __FILE__ ) . 'assets/css/owl.carousel.min.css' );

	/**
	 * loads JS files in the footer.
	 */
	wp_enqueue_script( 'highlightjs', plugin_dir_url( __FILE__ ) . 'assets/js/owl.carousel.min.js', '', '9.9.0', true );
}
