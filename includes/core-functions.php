<?php // Weather Buddy - Core Functions

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register the shortcode
function weather_buddy_plugin() {

    $options = get_option( 'weather_buddy_options', weather_buddy_options_default());
    // Begin the main container div
    $wbDiv = "<div class='wb-container'>";
    // Initialize new instances of the classes that are going to be used.
    $call = new ApiCall;
    $display_weather = new Display;
    // API call
    $weatherData = $call->request($options);
    //Process API data into a display string
    $displayString = $display_weather->init_display_weather($weatherData);
    $wbDiv .= $displayString;
    $wbDiv .="</div>";
    // Display weather information
    return $wbDiv;
}
add_shortcode('weather_buddy', 'weather_buddy_plugin');
