<?php
try {
    $pdo = new PDO(
        'pgsql:host=localhost;dbname=catalog',
        'user',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo 'Невозможно установить соединение с базой данных';
}
