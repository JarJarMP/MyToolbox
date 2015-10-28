<?php

require_once('WeatherData.php');
require_once('Displays/CurrentConditionsDisplay.php');
require_once('Displays/ForecastDisplay.php');
require_once('Displays/HeatIndexDisplay.php');
require_once('Displays/StatisticsDisplay.php');

class WeatherStation
{
    public static function index()
    {
        $weatherData = new WeatherData();
    
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}
