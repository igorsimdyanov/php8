<?php
require_once('trait_rainbow.php');

echo 'Количество цветов: '. Rainbow::size() . '<br />' . PHP_EOL;

foreach (Rainbow::cases() as $object) {
    echo $object->russian() . '<br />' . PHP_EOL;
}
