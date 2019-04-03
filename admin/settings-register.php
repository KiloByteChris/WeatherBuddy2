<?php // Weather Buddy - Register Settings

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


// register plugin settings
function weather_buddy_register_settings() {

	register_setting(
		'weather_buddy_options',
		'weather_buddy_options',
		'weather_buddy_options_callback_validate_options'
	);

    add_settings_section(
        'weather_buddy_section_admin',
        'Weather Buddy Options',
        'weather_buddy_callback_section_admin',
        'weather_buddy'
    );

    add_settings_field(
        'weather_buddy_location',
        'Location',
        'weather_buddy_callback_field_text',
        'weather_buddy',
        'weather_buddy_section_admin',
        [ 'id' => 'weather_buddy_location', 'label' => 'Location of the weather forecast' ]
    );

    add_settings_field(
        'weather_buddy_api_key',
        'API Key',
        'weather_buddy_callback_field_text',
        'weather_buddy',
        'weather_buddy_section_admin',
        [ 'id' => 'weather_buddy_api_key', 'label' => 'Weather Underground API Key' ]
    );

}
add_action( 'admin_init', 'weather_buddy_register_settings' );
