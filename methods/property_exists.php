<?php
require_once 'greeting.php';

$greeting = new Greeting;

$greeting->x = 5;
if (property_exists($greeting, 'x')) {
    echo $greeting->x; // 5
}
