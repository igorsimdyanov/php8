<?php
$arr = [
    'a' => 'one',
    'b' => 'two',
    'c' => 'three',
    'd' => 'four'
];

asort($arr);

foreach($arr as $key => $val) {
    echo " $key => $val ";
}
