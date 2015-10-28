<?php

require_once('GumballMachine.php');

$gumballMachine = new GumballMachine(5);

$gumballMachine->toString();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->toString();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->toString();
