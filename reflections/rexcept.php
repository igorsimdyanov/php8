<?php
try {
    $obj = new ReflectionFunction('spoon');
} catch (ReflectionException $e) {
    echo 'Исключение: ', $e->getMessage();
}
