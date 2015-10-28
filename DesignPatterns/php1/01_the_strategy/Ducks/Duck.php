<?php

require_once(__DIR__.'/../Behaviours/Fly/FlyNoWay.php');
require_once(__DIR__.'/../Behaviours/Fly/FlyRocketPowered.php');
require_once(__DIR__.'/../Behaviours/Fly/FlyWithWings.php');
require_once(__DIR__.'/../Behaviours/Quack/FakeQuack.php');
require_once(__DIR__.'/../Behaviours/Quack/MuteQuack.php');
require_once(__DIR__.'/../Behaviours/Quack/Quack.php');
require_once(__DIR__.'/../Behaviours/Quack/Squeak.php');

abstract class Duck 
{
    protected $flyBehavior;
    protected $quackBehavior;

    public function __construct() {}

    abstract public function display();

    public function setFlyBehavior($fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior($qb)
    {
        $this->quackBehavior = $qb;
    }   

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!";
        echo "<br/>";
    }
}
