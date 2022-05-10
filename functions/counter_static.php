<?php
function counter()
{
    static $counter = 0;
    return ++$counter;
}
