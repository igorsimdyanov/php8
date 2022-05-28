<?php
header('Content-type: text/plain');

$flags = [
    'PREG_PATTERN_ORDER' => PREG_PATTERN_ORDER,
    'PREG_SET_ORDER' => PREG_SET_ORDER,
    'PREG_SET_ORDER|PREG_OFFSET_CAPTURE' => PREG_SET_ORDER|PREG_OFFSET_CAPTURE
];
$re   = '|<(\w+).*?>(.*?)</\1>|s';
$text = '<b>текст</b>  и еще <i>другой текст</i>';

echo "Строка: $text" . PHP_EOL;
echo "Выражение: $re"  . PHP_EOL . PHP_EOL;
foreach ($flags as $name => $flags) {
    preg_match_all($re, $text, $mathces, $flags);
    echo "Флаг $name:" . PHP_EOL;
    print_r($mathces);
    echo PHP_EOL;
}
