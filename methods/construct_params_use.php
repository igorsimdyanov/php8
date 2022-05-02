<?php
require_once 'construct_params.php';

// $point = new Point(); // PHP Fatal error: Uncaught ArgumentCountError
$point = new Point(x: 5, y: 3);
echo $point->distance(); // 5.8309518948453
