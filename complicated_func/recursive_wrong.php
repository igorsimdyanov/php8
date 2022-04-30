<?php
function factorial(int $number): int
{
    return $number * factorial($number - 1);
}
 
echo factorial(5);
