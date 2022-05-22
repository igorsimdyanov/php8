<?php
require_once 'rainbow.php';

function print_color(Rainbow $color) : void
{
    echo $color->name;
}

$col = Rainbow::Green;

print_color($col);          // Green
echo '<br />' . PHP_EOL;
print_color(Rainbow::Blue); // Blue
echo '<br />' . PHP_EOL;
print_color('Orange');      // Fatal Error
