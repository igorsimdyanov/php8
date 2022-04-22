<?php
require 'point_type.php';

$point = new Point;
$point->x = 3;
$point->y = 5;

echo ($point->x ** 2 + $point->y ** 2) ** 0.5; // 5.8309518948453
