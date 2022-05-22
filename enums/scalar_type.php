<?php
require_once 'scalar.php';

function print_color(Rainbow $color) : void
{
    echo $color->value;
}

$col = Rainbow::Green;

echo $col->value;           // Зеленый
echo '<br />' . PHP_EOL;
print_color(Rainbow::Blue); // Голубой
