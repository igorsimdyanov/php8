<?php
require 'point.php';

$point = new Point;
$point->x = 'примерно четыре';
$point->y = 'неизвестно';

echo ($point->x ** 2 + $point->y ** 2) ** 0.5;
// PHP Fatal error:  Uncaught TypeError: Unsupported operand types: string ** int
