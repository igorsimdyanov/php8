<?php
spl_autoload_register();

$reflect = new ReflectionClass(Entrypoint\User::class);

echo '<pre>';
foreach ($reflect->getMethods() as $method) {
    $attrs = array_map(
                 fn($element) => $element->getName(),
                 $method->getAttributes()
             );
    if (count($attrs) > 0) {
        echo '<b>'. $method->getName() . '</b>' . PHP_EOL;
        echo implode(PHP_EOL, $attrs) . PHP_EOL;
    }
}
echo '</pre>';
