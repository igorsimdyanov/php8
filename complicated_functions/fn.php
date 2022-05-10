<?php
$cub = array_map(fn(int|float $n) => $n * $n * $n, [1, 2, 3, 4, 5]);

echo '<pre>';
print_r($cub);
echo '</pre>';
