<?php
function convertToGrams(int $value, int $factor = 1_000) : int
{
    return $value * $factor;
}

echo convert(11, 1024); // 11264
echo '<br />';
echo convert('10.0', 1024.0); // 10240
