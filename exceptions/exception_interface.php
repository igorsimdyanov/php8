<?php
try {
    $code = rand(0, 1);
    if (!$code) {
        throw new Exception('Первая точка входа', $code);
    } else {
        throw new Exception('Вторая точка входа', $code);
    }
} catch (Exception $exp) {
    echo "Исключение {$exp->getCode()} : {$exp->getMessage()}<br />";
    echo "в файле {$exp->getFile()}<br />";
    echo "в строке {$exp->getLine()}<br />";
}
