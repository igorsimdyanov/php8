<?php
$a = 10;
$b = &$a;              // теперь $b - то же самое, что и $a
$b = 0;                // на самом деле $a = 0
echo "b = $b, a = $a"; // выводит "b = 0, a = 0"
