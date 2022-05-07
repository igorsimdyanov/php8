<?php
$str = 'Привет, мир!';
echo "В строке '$str' " . strlen($str) . " байт<br />"; // 21
echo "В строке '$str' " . mb_strlen($str) . " символов<br />"; // 12
