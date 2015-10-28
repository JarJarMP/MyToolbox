<?php

require_once('Subject.php');

class WeatherData implements Subject
{
    private $observers; // array of observers
    private $temperature; // float
    private $humidity; // float
    private $pressure; // float
    
    public function __construct()
    {
        $this->observers = array();
    }
    
    public function registerObserver($o)
    {
        $index = $this->getUniqeIndexForObservers();

        $this->observers[$index] = $o;

        return $index; // save in the observer
    }
    
    public function removeObserver($o)
    {
        $index = $o->getIndex();
        unset($this->observers[$index]);
    }
    
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update(
                $this->temperature, 
                $this->humidity, 
                $this->pressure
            );
        }
    }
    
    public function measurementsChanged()
    {
        $this->notifyObservers();
    }
    
    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }
    
    public function getHumidity()
    {
        return $this->humidity;
    }
    
    public function getPressure()
    {
        return $this->pressure;
    }

    private function getUniqeIndexForObservers()
    {
        return str_replace('.', '', microtime(true));
    }
}
