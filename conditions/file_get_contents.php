<?php
$content = file_get_contents('http://php.net') or exit('Ошибка');
echo $content;
