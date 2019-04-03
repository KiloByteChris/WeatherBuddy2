<?php
/*
This class used to request the weather information from the Open WEather API.
*/
class ApiCall{
    /*
    Method used to make API requests using cURL.
    Inputs the URL and outputs the data in the form of a JSON
    */
    private function call_api($url) {
        // Start cURL
    	$curl = curl_init();
    	// Set cURL options
    	curl_setopt($curl, CURLOPT_URL, $url);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    	// Make the request and then close the connection
    	$data = curl_exec($curl);
    	curl_close($curl);
    	return $data;
    }
    /*
    This function builds a urls from the necassary paramaters needed to make the api call.
    Once the url is bild, the call_api() method is used to make the call.
    */
    public function request() {
        // Use the open weather api url and my api key to build a new url
        $url = 'http://api.openweathermap.org/data/2.5/forecast?zip=98663,us';
        $apiParam = '&appid=';
        $apiKey = '0d78f016d75e6ca170516578566505bd';
        $url .= $apiParam;
        $url .= $apiKey;
        // Use the url to request data from the weather api
        $weatherData = $this->call_api($url);
        // The api returns json. Parsse the json string into a php object
        $weatherData = json_decode($weatherData);
        return $weatherData;
    }
}
?>
