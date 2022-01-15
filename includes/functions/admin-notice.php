<?php
/**
 * Admin Notice
 *
 * Add an admin notice when the WP Data Sync plugin is not actove.
 *
 * @since   1.0.0
 *
 * @package WP_DataSync
 */

namespace WP_DataSync\RegenerateThumbnails;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Check for the WP Data Sync plugin.
 */

if ( ! defined( 'WPDSYNC_VERSION' ) ) {

	add_action( 'admin_notices', function() {

		$message = __( 'NOTICE: The WP Data Sync plugin is required to use WP Data Sync Regenerate Thumbnails', 'wp-data-sync-menu-item' );
		$url     = 'https://wordpress.org/plugins/wp-data-sync/';

		printf(
			'<div class="notice notice-error"><p>%s</p><p><a href="%s" target="_blank">%s</a></p></div>',
			esc_html( $message ),
			esc_url( $url ),
			esc_html( 'WP Data Sync Plugin' )
		);

	} );

}

/**
 * Check for the RegenerateThumbnails class.
 */

if ( ! class_exists( 'RegenerateThumbnails' ) ) {

	add_action( 'admin_notices', function() {

		$message = __( 'NOTICE: The Regenerate Thumbnails plugin is required to use WP Data Sync - Regenerate Thumbnails', 'wp-data-sync-menu-item' );
		$url     = 'https://wordpress.org/plugins/regenerate-thumbnails/';

		printf(
			'<div class="notice notice-error"><p>%s</p><p><a href="%s" target="_blank">%s</a></p></div>',
			esc_html( $message ),
			esc_url( $url ),
			esc_html( 'Regenerate Thumbnails Plugin' )
		);

	} );

}
