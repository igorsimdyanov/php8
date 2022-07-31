<?php
require_once 'rainbow.php';

foreach (Rainbow::cases() as $object) {
    echo $object->name . '<br />';
}
