<?php
require_once('hello.php');

$obj = new ReflectionFunction('hello');

foreach ($obj->getParameters() as $param) {
    echo $param->getName() .'<br />';
}
