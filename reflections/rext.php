<?php
$consts = [];
foreach (get_loaded_extensions() as $name) {
    $ext = new ReflectionExtension($name);
    $consts = array_merge($consts, $ext->getConstants());
}

echo '<pre>';
print_r($consts);
echo '</pre>';
