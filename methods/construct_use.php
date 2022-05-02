<?php
require_once('construct.php');

$point = new Point;       // Вызов конструктора

var_dump($point->getX()); // int(0)
var_dump($point->getY()); // int(0)
