<?php
$name = "Имя пользователя";
$str = <<<'HTML_END'
Переменные PHP не будут интерполироваться: $name
HTML_END;
echo $str;