<?php
require_once 'greeting.php';

$greeting = new Greeting;

$greeting->x = 5;
echo $greeting->x; // 5
