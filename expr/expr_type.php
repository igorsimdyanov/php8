<?php
$a = 10 * 20;
$b = "" . (10 * 20);
echo "$a:" . gettype($a) . ", $b:" . gettype($b); // 200:integer, 200:string
