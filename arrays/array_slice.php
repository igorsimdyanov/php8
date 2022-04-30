<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

echo '<pre>';
$out = array_slice($arr, 2);     // возвращает 'c', 'd', 'e'
print_r($out);
$out = array_slice($arr, 2, -1); // возвращает 'c', 'd'
print_r($out);
$out = array_slice($arr, -2, 1); // возвращает 'd'
print_r($out);
$out = array_slice($arr, 0, 3);  // возвращает 'a', 'b', 'c'
print_r($out);
echo '</pre>';
