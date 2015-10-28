<?php

require_once('State.php');

class SoldOutState implements State
{
    protected $gumballMachine;
 
    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
 
    public function insertQuarter()
    {
        echo "You can't insert a quarter, the machine is sold out";
        echo "<br/>";
    }
 
    public function ejectQuarter()
    {
        echo "You can't eject, you haven't inserted a quarter yet";
        echo "<br/>";
    }
 
    public function turnCrank()
    {
        echo "You turned, but there are no gumballs";
        echo "<br/>";
    }
 
    public function dispense()
    {
        echo "No gumball dispensed";
        echo "<br/>";
    }
 
    public function toString()
    {
        return "sold out";
    }
}
