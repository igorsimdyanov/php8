<?php
require_once 'file/logger/debug0.php';

$logger = new FileLoggerDebug0('test', 'test.log');
$logger->log('Обычное сообщение');
$logger->debug('Отладочное сообщение');
