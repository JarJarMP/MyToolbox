<?php

require_once('State.php');

class NoQuarterState implements State
{
    protected $gumballMachine;
 
    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
 
    public function insertQuarter()
    {
        echo "You inserted a quarter";
        echo "<br/>";
        
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }
 
    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter";
        echo "<br/>";
    }
 
    public function turnCrank()
    {
        echo "You turned, but there's no quarter";
        echo "<br/>";
     }
 
    public function dispense()
    {
        echo "You need to pay first";
        echo "<br/>";
    } 
 
    public function toString()
    {
        return "waiting for quarter";
    }
}
