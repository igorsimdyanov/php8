<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

echo '<pre>';
print_r(array_chunk($arr, 2));
print_r(array_chunk($arr, 2, true));
echo '</pre>';
