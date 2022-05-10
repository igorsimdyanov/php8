<?php
$arr = array_reduce(
    [1, 2, 3, 4, 5],
    function (array $carry, int $item) : array
    {
        if (($item & 1)) {
            $carry[] = $item * $item;
        }
        return $carry;
    },
    []);

echo '<pre>';
print_r($arr);
echo '</pre>';
