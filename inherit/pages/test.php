<?php
require_once 'static_page.php';

$id = 3;
$page = new StaticPage($id);
$page->render();
echo $page->id($id);
