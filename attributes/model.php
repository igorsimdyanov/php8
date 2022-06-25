<?php
spl_autoload_register();

$reflect = new ReflectionClass(Model\User::class);

echo '<pre>';
foreach ($reflect->getAttributes() as $attribute) {
    echo $attribute->getName() . PHP_EOL;
    echo $attribute->newInstance()->info() . PHP_EOL;;
}
echo '</pre>';
