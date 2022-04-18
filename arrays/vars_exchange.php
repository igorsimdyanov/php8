<?php
$x = 4;
$y = 5;

echo "до:<br />";
echo "x = $x<br />"; // 4
echo "y = $y<br />"; // 5

list($y, $x) = [$x, $y];

echo "после:<br />";
echo "x = $x<br />"; // 5
echo "y = $y<br />"; // 4
