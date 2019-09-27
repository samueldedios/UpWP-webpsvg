<?php
/**
 * Plugin Name:Subir imagenes Webp
 * Plugin URI: http://mduperu.com
 * Description: Este plugin permite subir imagenes en formato WEBP.
 * Version: 1.0.0
 * Author: Samuel Dedios
 * Author URI: http://samueldedios.com
 * Requires at least: <4.X.X
 * Tested up to: 5.2.2
 *
 * Text Domain: wprincipiante
 * Domain Path: /languages/
 */




add_action( 'init', function() {

	add_filter( 'upload_mimes', 'ejr_mimes_webp' );
}, 10 );

function ejr_mimes_webp( $mimes ) {

	$mimes['webp'] = 'image/webp';
	return $mimes;
}

