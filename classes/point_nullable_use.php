<?php
require 'point_nullable.php';
$point = new Point;
$point->x = null;
$point->y = 3;
var_dump($point->x); // NULL
