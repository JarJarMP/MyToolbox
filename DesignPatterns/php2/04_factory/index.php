<?php

require_once('vehicle.php');

$car = Vehicle::create('car', 4);
echo $car->getType();

echo '<hr/>';

$truck = Vehicle::create('truck', 18);
echo $truck->getType();
