<?php
function convertToGrams($value, $factor)
{
    $result = $value * $factor;
    return $result;
}

define('BYTES_IN_KBYTES', 1024);
echo convertToGrams(11, BYTES_IN_KBYTES); // 11264
