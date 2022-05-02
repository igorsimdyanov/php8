<?php
require_once 'point.php';

$point = new Point;

$point->z = 5;

echo '<pre>';
print_r(get_object_vars($point));
echo '</pre>';
