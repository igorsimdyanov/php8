<?php
declare(strict_types = 1);

function convert(int $value, int $factor = 1_000) : int
{
    return $value * $factor;
}

echo convert(11, 1024); // 11264
echo '<br />';
echo convert('10.0', 1024.0);
// PHP Fatal error:  Uncaught TypeError: convert(): Argument #1 ($value) must be of type int, string given
