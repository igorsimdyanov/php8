<?php
spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    require_once("pager/src/{$class}.php");
});

try {
    $pdo = new PDO(
        'pgsql:host=localhost;dbname=test',
        'user');
    $obj = new ISPager\PdoPager(
        new ISPager\ItemsRange(),
        $pdo,
        'languages');

    // Содержимое текущей страницы
    foreach ($obj->getItems() as $language) {
        echo htmlspecialchars($language['name']) . '<br />';
    }

    // Постраничная навигация
    echo "<p>$obj</p>";
}
catch (PDOException $e) {
    echo 'Невозможно установить соединение с базой данных';
}
