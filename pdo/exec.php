<?php
require_once('connect_db.php');

$query = 'DROP TABLE IF EXISTS catalogs';
if ($pdo->exec($query) !== false) {
    echo 'Таблица catalogs успешно удалена<br />';
}

$query = 'CREATE TABLE catalogs (
           id SERIAL,
           name TEXT NOT NULL)';
if ($pdo->exec($query) !== false) {
    echo 'Таблица catalogs успешно создана<br />';
}
