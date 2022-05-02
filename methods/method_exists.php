<?php
require_once 'point.php';

$point = new Point;

if (method_exists($point, 'say')) {
    echo $point->say('PHP');
}
