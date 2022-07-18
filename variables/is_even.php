<?php
$number = 15;

$flag = (float)($number / 2) - (int)($number / 2);

// Определяем статус числа
if ($flag) { // true, т. к. $flag == 0.5
     echo "Число $number нечетное";
} else {
     echo "Число $number четное";
}
