<?php
require_once 'static_page.php';

function echoPage($obj)
{
    $class = 'Page';
    if (!($obj instanceof $class)) {
        die("Argument 1 must be an instance of $class.<br />");
    }
    $obj->render();
}

$page = new StaticPage(3);
echoPage($page);
