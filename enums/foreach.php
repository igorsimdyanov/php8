<?php
require_once 'rainbow.php';

$col = Rainbow::Green;

foreach ($col->cases() as $object) {
    echo $object->name . '<br />';
}
