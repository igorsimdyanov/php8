<?php
declare(strict_types = 1);

function convert(int|float $value, int|float $factor = 1_000) : int|float
{
    return $value * $factor;
}

echo convert(11.0, 1024.0); // 11264
