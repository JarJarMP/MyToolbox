<?php 

require_once('NYPizzaStore.php');
require_once('ChicagoPizzaStore.php');

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza("cheese");
echo "<br/><br/>Ethan recieved a " . $pizza->getName() . "<hr/>";

$pizza = $chicagoStore->orderPizza("cheese");
echo "<br/><br/>Joel recieved a " . $pizza->getName() . "<hr/>";

$pizza = $nyStore->orderPizza("clam");
echo "<br/><br/>Ethan recieved a " . $pizza->getName() . "<hr/>";

$pizza = $chicagoStore->orderPizza("clam");
echo "<br/><br/>Joel recieved a " . $pizza->getName() . "<hr/>";

$pizza = $nyStore->orderPizza("pepperoni");
echo "<br/><br/>Ethan recieved a " . $pizza->getName() . "<hr/>";

$pizza = $chicagoStore->orderPizza("pepperoni");
echo "<br/><br/>Joel recieved a " . $pizza->getName() . "<hr/>";

$pizza = $nyStore->orderPizza("veggie");
echo "<br/><br/>Ethan recieved a " . $pizza->getName() . "<hr/>";

$pizza = $chicagoStore->orderPizza("veggie");
echo "<br/><br/>Joel recieved a " . $pizza->getName() . "<hr/>";
