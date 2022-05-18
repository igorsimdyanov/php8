<?php
$str = '2022-07-15';
$re = '|^(?:\d{4})-(?:\d{2})-(\d{2})$|';
preg_match($re, $str, $matches) or exit('Соответствие не найдено');
echo htmlspecialchars('День: ' . $matches[1]);
