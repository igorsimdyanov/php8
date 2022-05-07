<?php
$str = '[b]Это[/b] очень жирный [b]текст[/b].';
$str = str_replace('[b]', '<b>', $str);
$str = str_replace('[/b]', '</b>', $str);
echo $str;
