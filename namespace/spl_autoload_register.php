<?php
spl_autoload_register();

$page = new PHP8\Page('О нас', 'Содержимое страницы');
$page->tags(); // Tag::tags
