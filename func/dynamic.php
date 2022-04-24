<?php
function hello()
{
    return 'Hello!';
}
function bye()
{
    return 'Bye!';
}

$var = rand(0, 1) ? 'hello' : 'bye';
echo $var();
