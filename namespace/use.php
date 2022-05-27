<?php
require_once 'namespaces_alt.php';

use PHP8\constants as constants;
use PHP8\functions as functions;
use PHP8\classes\Page as Page;

echo 'Версия ' . constants\VERSION . '<br />';
$page = new Page('Контакты', 'Содержимое страницы');
functions\debug($page);
