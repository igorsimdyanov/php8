<?php
$fst = rand(0, 1);
$snd = rand(0, 1);
if ($fst == 1 or $snd == 1) {
    echo "Одно из значений равно единице: $fst и $snd";
} else {
    echo "Пока не получилось: $fst и $snd";
}
