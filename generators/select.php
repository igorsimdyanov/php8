<?php
function select(array $arr, callable $callback)
{
    foreach ($arr as $value) {
        if ($callback($value)) yield $value;
    }
}

$arr = [1, 2, 3, 4, 5, 6];
$select = select($arr, fn($e) => $e % 2 == 0);
foreach ($select as $val) {
    echo "$val ";
}
