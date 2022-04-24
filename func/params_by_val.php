<?php
function getSum($var) // аргумент передается по значению
{
    $var = $var + 5;
    return $var;
}

$new_var = 20;
echo getSum($new_var); // 25
echo "<br />$new_var"; // 20
