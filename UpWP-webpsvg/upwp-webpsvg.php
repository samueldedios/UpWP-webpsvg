<?php
/**
 * Plugin Name:Subir imagenes y vectores Webp y SVG (UpWP-webpsvg)
 * Plugin URI: http://samueldedios.com
 * Description: Este plugin permite subir imagenes en formato WEBP y SVG
 * Version: 1.0.0
 * Author: Samuel Dedios
 * Author URI: http://samueldedios.com
 * Requires at least: <4.X.X
 * Tested up to: 5.X.X
 */


add_action( 'init', function() {

	add_filter( 'upload_mimes', 'ejr_mimes_webp' );
}, 10 );

function ejr_mimes_webp( $mimes ) {

	$mimes['webp'] = 'image/webp';
	return $mimes;
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
