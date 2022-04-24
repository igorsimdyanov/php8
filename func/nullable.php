<?php
function convert(int $value, ?int $factor) : int
{
    $factor ??= 1_000;
    return $value * $factor;
}

echo convert(5, null);  // 5000
echo '<br />';
echo convert(11, 1024); // 11264
