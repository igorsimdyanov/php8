<?php
require 'point_type.php';

$point = new Point;
$point->x = 'примерно четыре';
// PHP Fatal error:  Uncaught TypeError: Cannot assign string to property Point::$x of type int
