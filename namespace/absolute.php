<?php
namespace PHP8;

function strlen($str)
{
    return count(str_split($str));
}
// Или даже так
// function strlen($str) {
//     return \strlen($str);
// }

// Это PHP8\strlen
echo strlen('Hello world!') . '<br />';
// Это стандартная функция strlen()
echo \strlen('Hello world!') . '<br />';
