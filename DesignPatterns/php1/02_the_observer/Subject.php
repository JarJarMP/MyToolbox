<?php

interface Subject 
{
    public function registerObserver($o);
    public function removeObserver($o);
    public function notifyObservers();
}
