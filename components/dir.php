<?php
spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    require_once("pager/src/{$class}.php");
});

$obj = new ISPager\DirPager(
    new ISPager\PagesList(),
    'photos',
    3,
    2);

// Содержимое текущей страницы
foreach($obj->getItems() as $img) {
    echo "<img src='$img' /> ";
}

// Постраничная навигация
echo "<p>$obj</p>";
