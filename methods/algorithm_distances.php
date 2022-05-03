<?php
require_once('algorithm.php');

$points = [[3, 5], [5, 3], [5, 5], [5, 0]];
$objects = array_map([new Algorithm, 'distance'], $points);

echo '<pre>';
print_r($objects);
echo '</pre>';
