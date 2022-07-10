<?php
require_once 'config.php';

spl_autoload_register();

use MVC\Controllers\ControllerCache;

$obj = new ControllerCache('users/1.html', $redis);
echo $obj->render();
