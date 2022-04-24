<?php
function convertToGrams($value)
{
    $result = $value * 1_000;
    return $result;
}

echo convertToGrams(); // 11000
