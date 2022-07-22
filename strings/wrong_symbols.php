<?php
$str = "Некорректный для UTF-8 символ \x80";

echo 'ENT_IGNORE: ' .
     htmlspecialchars($str, ENT_IGNORE) .
     '<br />';
echo 'ENT_SUBSTITUTE: ' .
     htmlspecialchars($str, ENT_SUBSTITUTE) .
     '<br />';
echo 'ENT_DISALLOWED: ' .
     htmlspecialchars($str, ENT_DISALLOWED) .
     '<br />';
