<?php
function collect(array $arr, callable $callback)
{
    foreach ($arr as $value) {
        yield $callback($value);
    }
}

$arr = [1, 2, 3, 4, 5, 6];
$collect = collect($arr, fn($e) => $e * $e);
foreach ($collect as $val) {
    echo "$val ";
}
