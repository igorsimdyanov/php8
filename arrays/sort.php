<?php
$numbers = ['2', '1', '4', '3','5'];

echo 'до сортировки: <br />';
echo '<pre>';
print_r($numbers);
echo '</pre>';

sort($numbers);

echo 'после сортировки: <br />';
echo '<pre>';
print_r($numbers);
echo '</pre>';
