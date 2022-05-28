<?php
spl_autoload_register();

use MVC\Controllers\Controller;

$obj = new Controller('users.rss');
echo $obj->render();
