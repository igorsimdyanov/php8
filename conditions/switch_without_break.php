<?php
$number = 2;
switch($number)
{
    case 1:
        echo 'один ';
    case 2: case 3:
        echo 'три ';
    case 4: case 5:
        echo 'пять ';
    case 6: case 7:
        echo 'семь ';
    case 8: case 9:
        echo 'девять ';
        break;
    default:
        echo 'Это либо не число, либо число больше 9 или меньше 1';
}
