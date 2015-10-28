<?php 

require_once('SimplePizzaFactory.php');
require_once('PizzaStore.php');

$factory = new SimplePizzaFactory();
$store = new PizzaStore($factory);

$pizza = $store->orderPizza("cheese");
echo "We ordered a " . $pizza->getName() . "<br/>";
echo $pizza->toString();

echo "<hr/>";

$pizza = $store->orderPizza("veggie");
echo "We ordered a " . $pizza->getName() . "<br/>";
echo $pizza->toString();
