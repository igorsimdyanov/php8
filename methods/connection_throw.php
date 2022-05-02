<?php
require_once('connection.php');

$connection = new Connection(); // Вызов конструктора
throw new Exception;            // Fatal error: Uncaught exception 'Exception'
print_r($connection);           // Эта точка никогда не достигается
