<?php
require 'point.php';

$point = new Point;

$point->x = 3;
$point->y = 7;

// Уничтожение объекта
unset($point);
echo $point->x; // PHP Warning:  Undefined variable $point
