<?php
try {
    $str = 'Hello world!';
    $str[] = 4;
}
catch(Exception $exp)
{
    echo 'Попытка обработать ошибку при помощи catch-блока';
}
