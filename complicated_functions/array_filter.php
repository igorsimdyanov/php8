<?php
function is_odd(int $number) : bool
{
    return (bool)($number & 1);
}

$odds = array_filter([1, 2, 3, 4, 5], 'is_odd');

echo '<pre>';
print_r($odds);
echo '</pre>';
