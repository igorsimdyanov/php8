<?php
require_once('point.php');

$point = new Point;

var_dump($point->getX()); // NULL
var_dump($point->getY()); // NULL

$point->setX(5);
$point->setY(3);

var_dump($point->getX()); // int(5)
var_dump($point->getY()); // int(3)
