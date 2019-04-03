<?php // Weather Buddy - Settings Callbacks

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// callback: admin section
function weather_buddy_callback_section_admin() {

	echo '<p>Welcome to Weather Buddy!</p>';
	echo '<p>This plugin is used to display a simple weather forecast.</p>';

}

// callback: select field
function weather_buddy_callback_field_text( $args ) {

    $options = get_option( 'weather_buddy_options', weather_buddy_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	echo '<input id="weather_buddy_options'. $id .'" name="weather_buddy_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="weather_buddy_options'. $id .'">'. $label .'</label>';

}
