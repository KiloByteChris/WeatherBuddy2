<?php
/*
This class is used for displaying the weather forecast.
*/
class Display {
    /*
    Initialize the display process.
    This method is the main function that creates the display string.
    */
    public function init_display_weather($weatherData){
        // Select the needed data and assign the values to an array.
        $weatherValues = $this->assign_values($weatherData);
        // Use the values in the array to build an html string.
        $weatherDisplayString = $this->build_display_string($weatherValues);
        return $weatherDisplayString;
    }
    /*
    This method creates an array from the weather data.
    */
    private function assign_values($weatherData) {
        $weatherValues['icon'] = $weatherData->list[0]->weather[0]->icon;
        $weatherValues['description'] = $weatherData->list[0]->weather[0]->description;
        // Select the temperature from the data and assign to the array. Also, use the temp_conversion() method to convert the temp.
        $weatherValues['temp'] = $this->temp_conversion($weatherData->list[0]->main->temp);
        return $weatherValues;
    }
    /*
	Method to build an HTML string that displays the weather infromation
    */
    private function build_display_string($weatherValues) {
    	$weatherDisplayString = "<div class='weather-card'>";
    	//Display the weather icon
    	$weatherDisplayString .= "<img class='weatherImg' src='http://openweathermap.org/img/w/".$weatherValues['icon'].".png' />";
    	//Display weather description
    	$weatherDisplayString .= "<p>".$weatherValues['description']."</p>";
    	//Display the tempurature
    	$weatherDisplayString .= "<p>".$weatherValues['temp']."&deg</p>";
    	$weatherDisplayString .= "</div>";
    	// echo $weatherDisplayString;
    	return $weatherDisplayString;
    }
    /*
    Method is used for converting the temperature from Kelvin to Fahrenheit
    */
    private function temp_conversion($temp_k) {
        $temp_f = ($temp_k * (9/5)) - 459.67;
        $temp_f = round($temp_f);
        return $temp_f;
    }
}
