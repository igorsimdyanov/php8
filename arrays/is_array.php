<?php
$arr = [1, 2, 3];

if (is_array($arr)) {
    echo 'Это массив<br />';
} else {
    echo 'Это не массив<br />';
}

if (is_array($arr[0])) {
    echo 'Это массив<br />';
} else {
    echo 'Это не массив<br />';
}
