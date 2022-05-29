<?php
function throughTheDoor(string $which) : void
{
    echo "Get through the $which door";
}

$func = new ReflectionFunction('throughTheDoor');
$func->invoke('left');
