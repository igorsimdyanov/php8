<?php
function convertToGrams($factor = 1_000, $value)
{
    $result = $value * $factor;
    return $result;
}
