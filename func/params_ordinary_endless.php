<?php
function echoList($x, $y, ...$items)
{
    echo $x;          // PHP
    echo $y;          // Python
    var_dump($items); // ['Ruby', 'JavaScript']
}

echoList('PHP', 'Python', 'Ruby', 'JavaScript');
