<?php // Weather Buddy - Core Functions

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register the shortcode
function weather_buddy_shortcode() {
    $option = get_option( 'weather_buddy_options', weather_buddy_options_default());
    //$wb_test = "We're in here";
    print_r($option);
    return $wb_test;
}
add_shortcode('weather_buddy', 'weather_buddy_shortcode');
