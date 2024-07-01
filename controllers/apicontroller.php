<?php
// routes/hello.php

class apiController
{
    public function index()
    {
        echo json_encode(['status' => 200, 'message' => 'API V1.0 currently running.']);
    }
    public function hello()
    {
        $visitor_name = trim(@$_GET['visitor_name'], "\"' \t\n\r\0\x0B");
        $visitor_name = empty($visitor_name) ? "Guest" : $visitor_name;
        $ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);

        $weather_api_key = API_KEY;
        $response = @json_decode(file_get_contents("https://api.weatherapi.com/v1/current.json?q=$ip&key=$weather_api_key"));

        echo json_encode([
            "client_ip" => $ip, // The IP address of the requester
            "location" => $response->location->name, // The city of the requester
            "greeting" => "Hello, $visitor_name!, the temperature is " . $response->current->temp_c . " degrees Celcius in " . $response->location->name
        ]);
    }
}
