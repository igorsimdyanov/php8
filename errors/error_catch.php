<?php
try {
    $str = 'Hello world!';
    $str[] = 4;
} catch (Error $err) {
    echo 'Попытка обработать ошибку при помощи catch-блока';
}
