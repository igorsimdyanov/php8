<?php
namespace PHP8;

function strlen($str)
{
    return count(str_split($str));
}

// Это PHP8\strlen
echo \PHP8\strlen('Hello, world!') . '<br />';
echo strlen('Hello, world!') . '<br />';
echo namespace\strlen('Hello, world!') . '<br />';
