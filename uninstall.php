<?php register_uninstall_hook($file, $callback);
//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

$alterinventory_plugin_disattivazione = 'alter-inventory';

// For Single site
if ( !is_multisite() ) 
{
    delete_option( $alterinventory );
   delete_option( $alterinventory_disable_revision );
} 
// For Multisite
else 
{
    global $wpdb;
    $wp_posts_ids = $wpdb->get_col( "SELECT wp_posts_id FROM $wpdb->posts" );
    $original_wp_posts_id = get_current_wp_posts_id();
    foreach ( $posts_ids as $post_id ) 
    {
        switch_to_wp_posts( $w_posts_id );
        delete_site_option( $alterinventory_disable_revision );  
    }
    switch_to_wp_posts( $original_wp_posts_id );
}