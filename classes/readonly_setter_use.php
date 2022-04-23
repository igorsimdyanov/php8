<?php
require_once('readonly_setter.php');

$object = new Greeting;
echo $object->setter();
echo $object->hello; // PHP
