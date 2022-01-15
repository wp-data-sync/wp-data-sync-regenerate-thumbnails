<?php
/**
 * Regenerate
 *
 * Regenerate thumbnails.
 *
 * @since   1.0.0
 *
 * @package WP_DataSync
 */

namespace WP_DataSync\RegenerateThumbnails;

use WP_DataSync\App\Log;
use RegenerateThumbnails_Regenerator;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Attachement Created
 *
 * @param int         $attach_id
 * @param array       $image_array
 * @param WP_DataSync $data_sync
 */

add_action( 'wp_data_sync_attachment_created', function( $attach_id, $image_array, $data_sync ) {

	if ( ! class_exists( 'RegenerateThumbnails_Regenerator' ) ) {
		return;
	}

	$rtr = RegenerateThumbnails_Regenerator::get_instance( $attach_id );

	Log::write( 'attachment-created', $rtr );

	if ( ! is_wp_error( $rtr ) ) {

		$new_metadata = $rtr->regenerate();

		Log::write( 'attachment-created', $new_metadata, 'New Metadata' );

	}

}, 10, 3 );
