<?php
/*
Plugin Name:  Weather Buddy
Description:  A plugin that displays a weather forecast.
Plugin URI:   new-volume.com
Author:       Chris McGuire
Version:      1.0
Text Domain:  weather_buddy
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// if this is the admin area
if ( is_admin()) {

    // include dependencies
    require_once plugin_dir_path( __FILE__ ) .     'admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) .     'admin/settings-page.php';
    require_once plugin_dir_path( __FILE__ ) .     'admin/settings-register.php';
    require_once plugin_dir_path( __FILE__ ) .     'admin/settings-callbacks.php';
    require_once plugin_dir_path( __FILE__ ) .     'admin/settings-validation.php';

}

// include dependencies admin and public
require_once plugin_dir_path( __FILE__ ) .     'includes/core-functions.php';

// default plugin options
function weather_buddy_options_default() {

	return array(
		'weather_buddy_location'     => 'Portland, OR',
	);

}
