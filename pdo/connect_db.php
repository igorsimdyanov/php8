<?php
try {
    $pdo = new PDO('pgsql:host=localhost;dbname=catalog', 'user', '');
} catch (PDOException $e) {
    echo 'Невозможно установить соединение с базой данных';
}
