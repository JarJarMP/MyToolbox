<?php

require_once('HasQuarterState.php');
require_once('NoQuarterState.php');
require_once('SoldOutState.php');
require_once('SoldState.php');

class GumballMachine
{
    protected $soldOutState;
    protected $noQuarterState;
    protected $hasQuarterState;
    protected $soldState;
 
    protected $state;
    protected $count;
 
    public function __construct($numberGumballs) {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);

        $this->count = $numberGumballs;

        $this->state = $this->soldOutState;
        
        if ($this->count > 0) {
            $this->state = $this->noQuarterState;
        } 
    }
 
    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }
 
    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }
 
    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }
 
    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...";

        if ($this->count != 0) {
            $this->count--;
        }
    }
 
    public function getCount()
    {
        return $this->count;
    }
 
    public function refill($count)
    {
        $this->count = $count;
        $this->state = $this->noQuarterState;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }
 
    public function toString()
    {
        echo "<br/>Inventory: {$this->count} gumball";
        
        if ($this->count > 1) {
            echo "s";
        }
        
        echo "<br/>Machine is {$this->state->toString()}";
        echo "<br/>";
    }
}
