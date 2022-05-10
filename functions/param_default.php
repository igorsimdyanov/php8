<?php
function convertToGrams($value, $factor = 1_000)
{
    $result = $value * $factor;
    return $result;
}

echo convertToGrams(11); // 11000
echo '<br />';
echo convertToGrams(11, 1024); // 11264
