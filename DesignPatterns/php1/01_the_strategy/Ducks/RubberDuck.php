<?php

require_once('Duck.php');

class RubberDuck extends Duck 
{
    public function __construct() 
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function display() 
    {
        echo "I'm a rubber duck";
        echo "<br/>";
    }
}
