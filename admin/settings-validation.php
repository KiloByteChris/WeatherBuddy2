<?php // Weather Buddy - Settings Validation

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// validate plugin settings
function weather_buddy_validate_options( $input ) {

	// location
	if ( isset( $input['custom_title'] ) ) {

		$input['weather_buddy_location'] = sanitize_text_field( $input['weather_buddy_location'] );

	}

	return $input;

}
