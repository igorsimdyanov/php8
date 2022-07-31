<?php
require_once 'rainbow_translate.php';

foreach (Rainbow::cases() as $object) {
    echo 'Перевод для ' . $object->russian() . ': ' .
                          $object->english() . '<br />';
}
