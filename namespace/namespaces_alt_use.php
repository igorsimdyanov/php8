<?php
require_once 'namespaces_alt.php';

echo 'Версия ' . PHP8\constants\VERSION . '<br />';
$page = new PHP8\classes\Page('Контакты', 'Содержимое страницы');
PHP8\functions\debug($page);
