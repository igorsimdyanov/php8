<?php
require_once 'point.php';

$point = new Point;
$point->setX(5);
$point->setY(7);

echo $point->distance(); // 8.6023252670426
