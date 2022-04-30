<?php
$arr = [
    'a' => 'one',
    'd' => 'four',
    'c' => 'three',
    'b' => 'two'
];

ksort($arr);

foreach($arr as $key => $val) {
    echo " $key => $val ";
}
