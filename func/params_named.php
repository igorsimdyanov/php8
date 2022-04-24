<?php
function convertToGrams($value, $factor = 1_000)
{
    return $value * $factor;
}

echo convertToGrams(value: 5); // 5000
echo '<br />';
echo convertToGrams(value: 11, factor: 1_000); // 11000
echo '<br />';
echo convertToGrams(factor: 1024, value: 11); // 11264
