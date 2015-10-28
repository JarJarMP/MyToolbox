<?php

require_once('controllers/default_controller.php');
require_once('controllers/number_controller.php');

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : '';
$id     = isset($_GET['id']) ? $_GET['id'] : '';

switch($module) {
    case 'number':
        $controller = new NumberController();
        break;
    default:
        $controller = new DefaultController();
}

$controller->run($action, $id);
