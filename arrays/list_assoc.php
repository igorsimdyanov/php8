<?php
$arr = ['one' => 1, 'two' => 2, 'three' => 3];
list($one, $two, $three) = $arr;
echo $one;   // Notice: Undefined offset
echo $two;   // Notice: Undefined offset
echo $three; // Notice: Undefined offset
