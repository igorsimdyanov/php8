<?php
echo 'Таблица умножения' . PHP_EOL;

$i = 0;
define('MAX_NUMBER', 10);
 
while ($i < MAX_NUMBER) {
    $i++;
    $j = 0;
    while ($j < MAX_NUMBER) {
        $j++;
        echo sprintf('%3d ', $i * $j);
    }
    echo PHP_EOL;
}
