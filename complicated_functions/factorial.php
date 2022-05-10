<?php
function multiple(int $carry, int $item) : int
{
    return $carry * $item;
}

$arr = [1, 2, 3, 4, 5];

echo array_reduce($arr, 'multiple', $arr[0]); // 120
