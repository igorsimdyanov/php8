<?php
function oddSquare(array $carry, int $item) : array
{
    if (($item & 1)) {
        $carry[] = $item * $item;
    }
    return $carry;
}

$arr = array_reduce([1, 2, 3, 4, 5], 'oddSquare', []);

echo '<pre>';
print_r($arr);
echo '</pre>';
