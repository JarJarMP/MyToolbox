<?php

require_once('notify.php');

$notify = new Notify('username', 'password');
$notify->send('17035551212', '15125551212', 'body of the message');
