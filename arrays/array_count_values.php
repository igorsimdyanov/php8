<?php
$array = [1, 'hello', 1, 'world', 'hello'];
$new = array_count_values($array);

echo '<pre>';
print_r($new);
echo '</pre>';
