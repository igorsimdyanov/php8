<?php
$fst = [
          'a' => 'зеленый',
          'синий',
          'красный',
          'желтый'
        ];
$snd = [
          'b' => 'синий',
          'желтый',
          'красный'
        ];

$result = array_intersect($fst, $snd);

echo '<pre>';
print_r($result);
echo '</pre>';

