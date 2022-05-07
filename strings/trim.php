<?php
$str = '   Hello, world!   ';
$trim_str = trim($str);
$str_len = strlen($str);
$trim_str_len = strlen($trim_str);
echo " размер исходной строки '$str' = $str_len, <br />
размер строки '$trim_str' после удаления пробелов = $trim_str_len";
