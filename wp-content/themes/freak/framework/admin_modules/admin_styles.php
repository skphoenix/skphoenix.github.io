<?php
/**
 * Enqueue Scripts for Admin
 */
function freak_custom_wp_admin_style() {
    wp_enqueue_style( 'freak-admin_css', get_template_directory_uri() . '/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'freak_custom_wp_admin_style' );