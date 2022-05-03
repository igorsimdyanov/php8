<?php
require_once 'construct_private.php';

$point = new Point(x: 3, y: 5);

echo '<pre>';
print_r($point);
echo '<pre>';

echo $point->x; // Fatal error: Uncaught Error: Cannot access private property Point::$x
