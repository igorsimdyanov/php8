<?php
$arr = [
    'a'=>'apple',
    'b'=>'banana',
    'c'=> ['x', 'y', 'z']
];

$result = print_r($arr, true);

echo "<pre>";
echo $result;
echo "</pre>";
