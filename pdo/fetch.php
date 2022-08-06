<?php
require_once('connect.php');

try {
    $query = 'SELECT * FROM catalogs ORDER BY id';
    $cat = $pdo->query($query);

    while ($catalog = $cat->fetch()) {
        echo $catalog['name'] . '<br />';
    }
} catch (PDOException $e) {
    echo 'Ошибка выполнения запроса: ' . $e->getMessage();
}
