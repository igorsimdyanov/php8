<?php
require_once 'static_page.php';

function echoPage(Page $obj)
{
    $obj->render();
}

$shape = new StaticPage(3);
echoPage($shape);
