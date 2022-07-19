<?php
define('FLOAT_EPSILON', 0.000_000_000_01);

$fst = 4 / 3 - 1;
$snd = 1 / 3;

if (abs($fst - $snd) < FLOAT_EPSILON) {
    echo 'Числа равны';
} else {
    echo 'Числа не равны';
}
