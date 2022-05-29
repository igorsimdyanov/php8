<?php
require_once('hello.php');

$param = new ReflectionParameter('hello', 0);

echo $param->getName(); // name
