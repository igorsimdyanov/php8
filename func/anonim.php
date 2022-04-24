<?php
$echoList = function (...$str)
{
    foreach ($str as $v) {
        echo "$v<br />\n";
    }
};

$echoList('PHP', 'Python', 'Ruby', 'JavaScript');
