<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Custom Author Link
 * Plugin URI:        https://github.com/kntnt/kntnt-custom-author-link
 * GitHub Plugin URI: https://github.com/kntnt/kntnt-custom-author-link
 * Description:       Replaces the slug of author links with a custom slug and disables author archives.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-custom-author-link
 * Domain Path:       /languages
 */

namespace Kntnt\Custom_Author_Link;

defined( 'WPINC' ) || die;

// Define WP_DEBUG as TRUE and uncomment next line to debug this plugin.
// define( 'KNTNT_CUSTOM_AUTHOR_LINK', true );

spl_autoload_register( function ( $class ) {
	$ns_len = strlen( __NAMESPACE__ );
	if ( 0 == substr_compare( $class, __NAMESPACE__, 0, $ns_len ) ) {
		require_once __DIR__ . '/classes/' . strtr( strtolower( substr( $class, $ns_len + 1 ) ), '_', '-' ) . '.php';
	}
} );

new Plugin();
