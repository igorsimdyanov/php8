<?php
require_once 'file/logger/debug.php';

$logger = new FileLoggerDebug('test.log');

// FileLoggerDebug подходит вместо базового класса FileLogger
croak($logger, 'Hasta la vista.');

// Функция принимает параметр типа FileLogger
function croak(FileLogger $l, $msg)
{
    $l->log($msg);
    exit();
}
