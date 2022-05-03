<?php
require_once('distance.php');

$points = [[3, 5], [5, 3], [5, 5], [5, 0]];
$objects = array_map(
    fn($arr) => new Point(x: $arr[0], y: $arr[1]),
    $points
);

echo '<pre>';
print_r($objects);
echo '</pre>';
