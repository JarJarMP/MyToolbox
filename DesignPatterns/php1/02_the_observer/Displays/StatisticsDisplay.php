<?php

require_once('Observer.php');
require_once('DisplayElement.php');

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp = 0; // float
    private $minTemp = 200; // float
    private $tempSum = 0; // float
    private $numReadings; // int
    private $weatherData; // WeatherData

    private $index = ''; // index in the subjects observers list

    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->index = $weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->tempSum += $temp;
        $this->numReadings++;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }
 
        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->display();
    }

    public function display()
    {
        $avg =  ($this->tempSum / $this->numReadings);
        echo "Avg/Max/Min temperature = {$avg}/{$this->maxTemp}/{$this->minTemp}";

        echo "<br/>";
    }

    public function getIndex()
    {
        return $this->index;
    }
}
