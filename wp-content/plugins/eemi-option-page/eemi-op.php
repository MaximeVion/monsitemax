<?php
/**
 * Plugin Name: EEMI Option page
 * Description: TD - Option page
 * Author:      Julien Maury
 * Version:     0.1
 * Text Domain: eemi-op
 */

defined( 'ABSPATH' )
 or die ( 'No direct load !' );

define( 'EEMI_OP_DIR', plugin_dir_path( __FILE__ ) );
define( 'EEMI_OP_URL', plugin_dir_url( __FILE__ ) );

if ( is_admin() ) {
	require_once( EEMI_OP_DIR . 'library/class.settings-api.php' );
	require_once( EEMI_OP_DIR . 'inc/admin.php' );
}

function eemi_oop_init() {
	load_plugin_textdomain( 'eemi-op', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'eemi_oop_init' );
