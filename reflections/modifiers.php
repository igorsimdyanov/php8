<?php
$cls = new ReflectionClass('ReflectionFunctionAbstract');
$modifiers = Reflection::getModifierNames($cls->getModifiers());

echo '<pre>';
print_r($modifiers); // ['abstract']
echo '</pre>';
