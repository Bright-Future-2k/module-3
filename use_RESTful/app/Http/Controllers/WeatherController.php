<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;


class WeatherController extends Controller
{
    public function example_about_guzzle()
    {

        //use: package client Guzzle

        $client = new \GuzzleHttp\Client();
        $response = $client->request('get', 'http://api.openweathermap.org/data/2.5/weather?q=hanoi&appid=' . env('WEATHER_KEY'));
        $json_body = $response->getBody();
        $json_text = json_decode($json_body);

        return view('weather', compact('json_text'));
    }
}
