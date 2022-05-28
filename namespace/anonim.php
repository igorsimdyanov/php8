<?php
spl_autoload_register(function(string $classname){
    $namespace = array_map(
        fn($class) => $class != 'PHP8' ? strtolower($class) : $class,
        explode('\\', $classname)
    );
    require_once(__DIR__ . '/' . implode('/', $namespace) . '.php');
});

$page = new PHP8\Page('О нас', 'Содержимое страницы');
$page->authors(); // Author::authors()
