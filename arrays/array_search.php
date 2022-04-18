<?php
$array = [0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'];

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
