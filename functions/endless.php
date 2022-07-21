<?php
function echoList(...$items)
{
    foreach ($items as $v) {
        echo "$v<br />\n"; // выводим элемент
    }
}

echoList('PHP', 'Python', 'Ruby', 'JavaScript');
