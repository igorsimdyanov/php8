<?php
spl_autoload_register(function($classname){
    $path = strtolower($classname);
    require_once(__DIR__ . "/$path.php");
});

$page = new PHP8\Page('О нас', 'Содержимое страницы');
$page->tags();
