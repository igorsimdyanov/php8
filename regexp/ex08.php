<?php
$str = '2022-07-15';
$re = '|^(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})$|';
preg_match($re, $str, $matches) or exit('Соответствие не найдено');
echo 'День: '  . $matches['day']   . '<br />';
echo 'Месяц: ' . $matches['month'] . '<br />';
echo 'Год: '   . $matches['year']  . '<br />';
