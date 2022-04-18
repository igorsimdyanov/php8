<?php
$arr = [1, 2, 3, 4, 5];

// Удаляем третий элемент массива
unset($arr);

// Выводим дамп массива
echo '<pre>';
print_r($arr); // PHP Warning:  Undefined variable $arr
echo '</pre>';
