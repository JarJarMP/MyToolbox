<?php

require_once('State.php');

class SoldState implements State
{
    protected $gumballMachine;
 
    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
       
    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a gumball";
        echo "<br/>";
    }
 
    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank";
        echo "<br/>";
    }
 
    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball!";
        echo "<br/>";
    }
 
    public function dispense()
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!";
            echo "<br/>";

            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
 
    public function toString()
    {
        return "dispensing a gumball";
    }
}
