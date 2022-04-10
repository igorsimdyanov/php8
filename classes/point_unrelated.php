<?php
require 'point.php';

$fst = new Point;
$fst->x = 3;
$fst->y = 3;

$snd = new Point;
$snd->x = 5;
$snd->y = 5;

echo $fst->x; // 3
echo $snd->x; // 5
