<?php
function makeHex($st)
{
    for ($i = 0; $i < strlen($st); $i++) {
        $hex[] = sprintf('%02X', ord($st[$i]));
    }
    return join(' ', $hex);
}

// Открываем файл скрипта разными способами
$f = fopen(__FILE__, 'rb');  // бинарный режим
echo makeHex(fgets($f, 100)), '<br />', PHP_EOL;

$f = fopen(__FILE__, 'rt'); // текстовый режим
echo makeHex(fgets($f, 100)), '<br />', PHP_EOL;

