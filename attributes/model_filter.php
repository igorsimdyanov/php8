<?php
spl_autoload_register();
use Model\User as User;
use Model\Model as Model;

$reflect = new ReflectionClass(User::class);

echo '<pre>';
foreach ($reflect->getAttributes(Model::class) as $attribute) {
    echo $attribute->getName() . PHP_EOL;
    echo $attribute->newInstance()->info() . PHP_EOL;;
}
echo '</pre>';
