<?php
spl_autoload_register();

$reflect = new ReflectionClass(MVC\Page::class);

echo '<pre>';
foreach ($reflect->getAttributes() as $attribute) {
    echo $attribute->getName() . PHP_EOL;
}
echo '</pre>';
