<?php
define('CHARS', ['a', 'b', 'c']);
$char = CHARS[array_rand(CHARS)];

if ($char == 'a') {
     echo 'Передан первый символ алфавита';
} elseif ($char == 'b') {
     echo 'Передан второй символ алфавита';
} elseif ($char == 'c') {
     echo 'Передан третий символ алфавита';
} else {
     echo 'Символ не входит в список первых трех символов';
}
