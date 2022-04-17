<?php
$y = null;
$z = 'hello';
$x ??= 1; // 1
$y ??= 2; // 2
$z ??= 'world'; // 'hello'

echo $x; // 1
echo $y; // 2
echo $z; // hello
