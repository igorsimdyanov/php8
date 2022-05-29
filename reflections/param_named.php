<?php
require_once('hello.php');

$param = new ReflectionParameter('hello', 'name');

echo $param->getName(); // name
