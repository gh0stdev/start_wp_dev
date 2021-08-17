<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'carbon_fields_post_meta_container_saved', 'crb_after_save_event' );
function crb_after_save_event( $post_id ) {
    if ( get_post_type( $post_id ) !== 'crb_event' ) {
        return false;
    }

    $event_date = carbon_get_post_meta( $post_id, 'crb_event_date' );
    if ( $event_date ) {
        $timestamp = strtotime( $event_date );
        update_post_meta( $post_id, '_crb_event_timestamp', $timestamp );
    }
}