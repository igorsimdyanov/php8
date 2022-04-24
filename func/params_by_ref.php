<?php
function getSum(&$var) // аргумент передается по ссылке
{
    $var = $var + 5;
    return $var;
}

$new_var = 20;
echo getSum($new_var); // выводит 25
echo "<br />$new_var"; // выводит 25
