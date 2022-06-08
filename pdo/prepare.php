<?php
require_once('connect.php');

try {
    $query = 'SELECT *
              FROM catalogs
              WHERE id = :id';
    $cat = $pdo->prepare($query);
    $cat->execute(['id' => 1]);
    echo $cat->fetch()['name']; // Процессоры
} catch (PDOException $e) {
    echo 'Ошибка выполнения запроса: ' . $e->getMessage();
}