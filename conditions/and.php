<?php
$fst = rand(0, 1);
$snd = rand(0, 1);
if ($fst == 1 && $snd == 1) {
    echo "Оба значения равны единице: $fst и $snd";
} else {
    echo "Пока не получилось: $fst и $snd";
}
