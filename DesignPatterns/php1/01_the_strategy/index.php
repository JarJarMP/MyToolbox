<?php

require_once('Ducks/DecoyDuck.php');
require_once('Ducks/MallardDuck.php');
require_once('Ducks/ModelDuck.php');
require_once('Ducks/RedHeadDuck.php');
require_once('Ducks/RubberDuck.php');

$mallard = new MallardDuck();
$rubber = new RubberDuck();
$decoy = new DecoyDuck();
$model = new ModelDuck();

$mallard->performQuack();
$rubber->performQuack();
$decoy->performQuack();

echo "<hr/>";

$mallard->performFly();
$rubber->performFly();
$decoy->performFly();

echo "<hr/>";

$model->performFly(); 
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
