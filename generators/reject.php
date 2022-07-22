<?php
function reject(array $arr, callable $callback)
{
    foreach ($arr as $value) {
        if (!$callback($value)) yield $value;
    }
}

$arr = [1, 2, 3, 4, 5, 6];
$reject = reject($arr, fn($e) => $e % 2 == 0);
foreach ($reject as $val) {
    echo "$val ";
}
