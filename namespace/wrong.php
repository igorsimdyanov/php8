<?php
require_once(__DIR__ . '/PHP8/seo.php');
require_once(__DIR__ . '/PHP8/author.php');
require_once(__DIR__ . '/PHP8/page.php');

$page = new PHP8\Page('О нас', 'Содержимое страницы');
$page->authors(); // Author::authors()
