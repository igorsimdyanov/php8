<?php
require 'point.php';

$first = new Point;
$first->x = 3;
$first->y = 3;

$second = $first;

$second->x = 5;
$second->y = 5;

echo "x: {$first->x}, y: {$first->y}"; // x: 5, y: 5
