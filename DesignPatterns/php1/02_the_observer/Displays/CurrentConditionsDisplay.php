<?php

require_once('Observer.php');
require_once('DisplayElement.php');
    
class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature; // float
    private $humidity; // float
    private $weatherData; // WeatherData

    private $index = ''; // index in the subjects observers list
    
    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->index = $weatherData->registerObserver($this);
    }
    
    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        
        $this->display();
    }
    
    public function display()
    {
        echo "Current conditions: {$temperature} F degrees and {$humidity} % humidity";
        echo "<br/>";
    }

    public function getIndex()
    {
        return $this->index;
    }
}
