<?php
function convert(int $value, int $factor = 1_000) : void
{
    echo $value * $factor;
}

convert(11); // 11000
