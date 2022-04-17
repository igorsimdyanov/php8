<?php
($content = file_get_contents('http://php.net')) || exit('Ошибка');
echo $content;
