<?php

require_once('Duck.php');

class DecoyDuck extends Duck 
{
    public function __construct() 
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display() 
    {
        echo "I'm a duck Decoy";
        echo "<br/>";
    }
}
