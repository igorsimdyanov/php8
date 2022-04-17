<?php
$rand = rand(1, 10);
$number = $rand % 2;
if ($number  == 0) {
    echo 'Выпало четное число: ';
    echo $rand;
    echo '<br />';
} else {
    echo 'Выпало нечетное число: ';
    echo $rand;
    echo '<br />';
}
