<?php

require_once('Observer.php');
require_once('DisplayElement.php');

class ForecastDisplay implements Observer, DisplayElement
{
    private $currentPressure = 29.92; // float
    private $lastPressure; // float
    private $weatherData; // WeatherData 

    private $index = ''; // index in the subjects observers list

    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->index = $weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    public function display() 
    {
        echo "Forecast: ";

        if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!";

        } else if ($this->currentPressure == $this->lastPressure) {
            echo "More of the same";

        } else if ($this->currentPressure < $this->lastPressure) {
            echo "Watch out for cooler, rainy weather";
        }

        echo "<br/>";
    }

    public function getIndex()
    {
        return $this->index;
    }
}
