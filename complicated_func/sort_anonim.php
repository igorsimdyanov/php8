<?php
require_once('point.php');

$fst = new Point;
$fst->x = 12;
$fst->y = 5;
$snd = new Point;
$snd->x = 1;
$snd->y = 1;
$thd = new Point;
$thd->x = 4;
$thd->y = 10;

$arr = [$fst, $snd, $thd];

usort($arr, function($a, $b){
    $distance_a = sqrt($a->x ** 2 + $a->y ** 2);
    $distance_b = sqrt($b->x ** 2 + $b->y ** 2);
    return $distance_a <=> $distance_b;
});

echo '<pre>';
print_r($arr);
echo '</pre>';
