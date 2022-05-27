<?php
function __autoload($classname)
{
    require_once(__DIR__ . "/$classname.php");
}

$page = new PHP8\Page('О нас', 'Содержимое страницы');
$page->tags();
