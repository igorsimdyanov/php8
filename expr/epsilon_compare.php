<?php
define('FLOAT_EPSILON', 0.000_000_000_01);

$fst = 4 / 3 - 1;                      // 0.33333333333333
$snd = 1 / 3;                          // 0.33333333333333

echo $fst == $snd;                     // false
echo abs($fst - $snd) < FLOAT_EPSILON; // true
