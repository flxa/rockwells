<?php
/**
 * Theme functions and definitions
 *
 */

function apfa_scripts() {
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri().'/js/scripts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'apfa_scripts' );

// Custom Function to Include
function favicon_link() {
	//echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
//add_action( 'wp_head', 'favicon_link' );

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}