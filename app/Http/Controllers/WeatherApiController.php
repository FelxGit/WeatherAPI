<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Weather;

class WeatherApiController extends Controller
{
    public function __construct() {
        $this->key = 'e86a7547f9d4469bb9d123725202410';
    }

    public function search($city) {
        $response = Http::get('http://api.weatherapi.com/v1/search.json?key='.$this->key.'&q='.$city);
        return $response[0];
    }
    
    public function forecast($city) {
        return Http::get('http://api.weatherapi.com/v1/forecast.json?key='.$this->key.'&q='.$city);
    }

    public function saveWeather(Request $request){
        $w_api =  json_decode( $this->forecast($request->city)->getBody(),true);  //(json decode, true) - from guzzle PSR-7
    
        $weather = new Weather;
        $weather->user_id = $request->id;
        $weather->date = $w_api['forecast']['forecastday'][0]['date'];
        $weather->avghumidity = $w_api['forecast']['forecastday'][0]['day']['avghumidity'];
        $weather->avgtemp_c = $w_api['forecast']['forecastday'][0]['day']['avgtemp_c'];
        $weather->avgtemp_f = $w_api['forecast']['forecastday'][0]['day']['avgtemp_f'];
        $weather->avgvis_km = $w_api['forecast']['forecastday'][0]['day']['avgvis_km'];
        $weather->avgvis_miles = $w_api['forecast']['forecastday'][0]['day']['avgvis_miles'];
        $weather->daily_chance_of_rain = $w_api['forecast']['forecastday'][0]['day']['daily_chance_of_rain'];
        $weather->daily_chance_of_snow = $w_api['forecast']['forecastday'][0]['day']['daily_chance_of_snow'];
        $weather->daily_will_it_rain = $w_api['forecast']['forecastday'][0]['day']['daily_will_it_rain'];
        $weather->daily_will_it_snow = $w_api['forecast']['forecastday'][0]['day']['daily_will_it_snow'];
        $weather->daily_will_it_rain = $w_api['forecast']['forecastday'][0]['day']['daily_will_it_rain'];
        $weather->maxtemp_c = $w_api['forecast']['forecastday'][0]['day']['maxtemp_c'];
        $weather->maxtemp_f = $w_api['forecast']['forecastday'][0]['day']['maxtemp_f'];
        $weather->maxwind_kph = $w_api['forecast']['forecastday'][0]['day']['maxwind_kph'];
        $weather->maxwind_mph = $w_api['forecast']['forecastday'][0]['day']['maxwind_mph'];
        $weather->mintemp_c = $w_api['forecast']['forecastday'][0]['day']['mintemp_c'];
        $weather->mintemp_f = $w_api['forecast']['forecastday'][0]['day']['mintemp_f'];
        $weather->totalprecip_in = $w_api['forecast']['forecastday'][0]['day']['totalprecip_in'];
        $weather->totalprecip_mm = $w_api['forecast']['forecastday'][0]['day']['totalprecip_mm'];
        $weather->uv = $w_api['forecast']['forecastday'][0]['day']['uv'];
        $weather->save();
        
        return response()->json($weather);
    }

}
