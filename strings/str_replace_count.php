<?php
$str = '[b]Это[/b] очень жирный [b]текст[/b].';
echo str_replace(['[b]', '[/b]'], ['', ''], $str, $number);
echo '<br />';
echo "Осуществлено замен: $number";
