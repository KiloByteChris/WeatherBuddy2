<?php // Weather Buddy - admin menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// add top-level administrative menu
function weather_buddy_add_toplevel_menu() {

	add_menu_page(
		'Weather Buddy Settings',
		'Weather Buddy',
		'manage_options',
		'weather_buddy',
		'weather_buddy_display_settings_page',
		'dashicons-admin-generic',
		null
	);

}
add_action( 'admin_menu', 'weather_buddy_add_toplevel_menu' );
