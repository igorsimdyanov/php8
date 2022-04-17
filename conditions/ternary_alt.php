<?php
$y = null;
$z = 'hello';
$x = $x ?? 1; // 1
$y = $y ?? 2; // 2
$z = $z ?? 'world'; // 'hello'

echo $x; // 1
echo $y; // 2
echo $z; // hello
