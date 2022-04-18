<?php
$arr = [5 => 1, 2, 3];

for ($i = 0; $i < 10; $i++) {
    if (isset($arr[$i])) {
        echo "Элемент \$arr[$i] существует<br />";
    } else {
        echo "Элемент \$arr[$i] не существует<br />";
    }
}
