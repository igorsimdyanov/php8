<?php
function cube(int|float $n) : int|float
{
  return $n * $n * $n;
}

$arr = [1, 2, 3, 4, 5];
$cub = array_map('cube', $arr);

echo '<pre>';
print_r($cub);
echo '</pre>';
