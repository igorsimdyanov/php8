<?php
require_once('connect_db.php');

$query = 'CREATE TABLE catalogs (
           id SERIAL,
           name TEXT NOT NULL)';

$pdo->exec($query);
// $count = $pdo->exec($query);
// if ($count !== false)
//     echo 'Таблица создана успешно';
// else {
//     echo 'Не удалось создать таблицу';
//     echo '<pre>';
//     print_r($pdo->errorInfo());
//     echo '<pre>';
// }
