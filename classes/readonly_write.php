<?php
require_once('readonly_constructor.php');

$object = new Greeting;
$object->hello = 'world';
// PHP Fatal error:  Uncaught Error: Cannot modify readonly property Greeting::$hello in
