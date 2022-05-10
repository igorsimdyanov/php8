<?php
function is_odd(int $number) : bool
{
    return (bool)($number & 1);
}
function square(int $number) : int
{
    return $number * $number;
}

$odds = array_filter([1, 2, 3, 4, 5], 'is_odd');
foreach(array_map('square', $odds) as $number) {
    echo "$number<br />" . PHP_EOL;
}
