<?php

require_once('output.php');
require_once('square.php');
require_once('cube.php');
require_once('fourth.php');

$input = 10;

$output = new Output(new Square());
echo $output->display($input);

$output->setStrategy(new Cube());
echo $output->display($input);

$output->setStrategy(new Fourth());
echo $output->display($input);
