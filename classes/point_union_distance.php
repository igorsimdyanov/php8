<?php
require 'point_union.php';

$point = new Point;
$point->x = 3.2;
$point->y = 5;

echo ($point->x ** 2 + $point->y ** 2) ** 0.5; // 5.9363288318623
