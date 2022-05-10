<?php
$rand = 'rand';
$func = 'not_existed_function';

if(is_callable($rand)) { // true
    echo $rand();
}

if(is_callable($func)) { // false
    echo $func();
}
