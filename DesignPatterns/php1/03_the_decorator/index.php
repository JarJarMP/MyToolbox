<?php

require_once('Beverages/DarkRoast.php');
require_once('Beverages/Decaf.php');
require_once('Beverages/Espresso.php');
require_once('Beverages/HouseBlend.php');

require_once('Condiments/Milk.php');
require_once('Condiments/Mocha.php');
require_once('Condiments/Soy.php');
require_once('Condiments/Whip.php');

$beverage = new Espresso();
echo $beverage->getDescription() . ' $' . $beverage->cost();
$beverage = null;

echo "<hr/>";

$beverage = new HouseBlend();
$beverage = new Soy($beverage);
$beverage = new Mocha($beverage);
echo $beverage->getDescription() . ' $' . $beverage->cost();
$beverage = null;

echo "<hr/>";

$beverage = new Decaf();
$beverage = new Milk($beverage);
$beverage = new Milk($beverage);
echo $beverage->getDescription() . ' $' . $beverage->cost();
$beverage = null;
