<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$handler = new StreamHandler('app.log', Level::Warning);
$log->pushHandler($handler);
$log->warning('Предупреждение');
$log->error('Ошибка');
