<?php
function factorial(int $number): int
{
    if ($number <= 1) return 1;
    return $number * factorial($number - 1);
}
 
echo factorial(5); // 120
