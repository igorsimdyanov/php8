<?php
spl_autoload_register();

use Factory\Router;

$obj = Router::parse('users');
echo $obj->render();
