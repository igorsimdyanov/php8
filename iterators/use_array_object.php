<?php
$array = ['первый',
          'второй',
          'третий',
          'четвертый',
          'пятый'];

$collection = new ArrayObject($array);

echo $collection[2]; // третий
echo '<br />';

foreach($collection as $key => $value) {
    echo "Элемент с индексом $key и значением $value<br />";
}
