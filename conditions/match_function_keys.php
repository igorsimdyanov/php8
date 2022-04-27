<?php
$str = 'Hello, PHP!';
$arr = [1, 2, 3, 4, 5];
$obj = new DateTime();

$arg = 'string';
echo match($arg) {
    gettype($str) => $str,
    gettype($arr) => print_r($arr),
    gettype($obj) => var_dump($obj)
}; // Hello, PHP!
