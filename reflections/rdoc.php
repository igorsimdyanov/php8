<?php
require_once('hello.php');

$obj = new ReflectionFunction('hello');

echo '<pre>';
echo $obj->getDocComment();
echo '</pre>';
