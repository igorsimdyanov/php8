<?php
spl_autoload_register();

$array = ['первый',
          'второй',
          'третий',
          'четвертый',
          'пятый'];

$collection = new Iterators\LimitMyIterator($array);

foreach($collection as $key => $value) {
    echo "Элемент с индексом $key и значением $value<br />";
}
