<?php
$arr = ['синий', 'желтый', 'зеленый', 'красный', 'оранжевый'];
$rand_keys = array_rand($arr, 2);

echo '<pre>';
print_r($rand_keys);
echo '</pre>';
