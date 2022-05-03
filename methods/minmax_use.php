<?php
require_once 'minmax.php';

$obj = new MinMax();
echo $obj->min(43, 18, 5, 61, 23, 10, 56, 36); // 5
echo '<br />';
echo $obj->max(43, 18, 5, 61, 23); // 61
