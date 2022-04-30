<?php
$arr_first = [
    'file12.txt',
    'file10.txt',
    'file2.txt',
    'file1.txt'
];
$arr_second = $arr_first;

sort($arr_first);
echo 'Обычная сортировка<br />';
echo '<pre>';
print_r($arr_first);
echo '</pre>';

natsort($arr_second);
echo 'Естественная сортировка<br />';
echo '<pre>';
print_r($arr_second);
echo '</pre>';
