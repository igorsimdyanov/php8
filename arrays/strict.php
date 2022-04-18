<?php
$numbers = [0.57, '21.5', 40.52];
if (in_array(21.5, $numbers, true)) {
    echo 'Значение 21.5 найдено';
} else {
    echo 'Ничего не найдено';
}
