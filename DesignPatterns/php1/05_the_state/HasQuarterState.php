<?php

require_once('State.php');

class HasQuarterState implements State
{
    protected $gumballMachine;
 
    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
  
    public function insertQuarter()
    {
        echo "You can't insert another quarter";
        echo "<br/>";
    }
 
    public function ejectQuarter()
    {
        echo "Quarter returned";
        echo "<br/>";

        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
 
    public function turnCrank()
    {
        echo "You turned...";
        echo "<br/>";

        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }

    public function dispense()
    {
        echo "No gumball dispensed";
        echo "<br/>";
    }
 
    public function toString()
    {
        return "waiting for turn of crank";
    }
}
