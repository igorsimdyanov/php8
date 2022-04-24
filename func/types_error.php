<?php
declare(strict_types = 1);

function convert(int $value, int $factor = 1_000) : int
{
    return $value * $factor;
}

echo convert(11.0, 1024.0);
