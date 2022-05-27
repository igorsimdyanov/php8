<?php
require_once 'namespace.php';

echo 'Версия ' . PHP8\VERSION . '<br />';
$page = new PHP8\Page('Контакты', 'Содержимое страницы');
PHP8\debug($page);
