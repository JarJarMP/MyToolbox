<?php

require_once('Duck.php');

class MallardDuck extends Duck 
{
    public function __construct() 
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display() 
    {
        echo "I'm a real Mallard duck";
        echo "<br/>";
    }
}
