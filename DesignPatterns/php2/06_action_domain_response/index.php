<?php

require_once('actions/DefaultAction.php');
require_once('actions/NumberViewAction.php');

$action = isset($_GET['a']) ? $_GET['a'] : 'view';
$domain = isset($_GET['m']) ? $_GET['m'] : '';
$id     = isset($_GET['id']) ? $_GET['id'] : '';

switch($domain) {
    case 'number':
        $action = new NumberViewAction();
        break;
    default:
        $action = new DefaultAction();
}

$action->run($id);
