<?php
$numbers = [23, 45, 34, 2, 12];

// Упаковываем массив в строку
$str = serialize($numbers);
echo "$str<br />";

// Извлекаем массив из строки
$arr = unserialize($str);
echo '<pre>';
print_r($arr); // [23, 45, 34, 2, 12]
echo '</pre>';
