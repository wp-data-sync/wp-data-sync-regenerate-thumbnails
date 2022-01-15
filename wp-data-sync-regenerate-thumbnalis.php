<?php
/**
 * Plugin Name: WP Data Sync - Regenerate Thumbnails
 * Plugin URI:  https://wpdatasync.com/products/
 * Description: Extends WP Data Sync to use Regenerate Thumbnails plugin.
 * Version:     1.0.0
 * Author:      WP Data Sync
 * Author URI:  https://wpdatasync.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-data-sync
 *
 * Package:     WP_DataSync
*/

namespace WP_DataSync\RegenerateThumbnails;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$defines = [
	'WPDSYNC_REGENERATE_THUMBNAILS_VERSION' => '1.0.0'
];

foreach ( $defines as $define => $value ) {
	if ( ! defined( $define ) ) {
		define( $define, $value );
	}
}

add_action( 'plugins_loaded', function() {

	foreach ( glob( plugin_dir_path( __FILE__ ) . 'includes/**/*.php' ) as $file ) {
		require_once $file;
	}

}, 99 );
