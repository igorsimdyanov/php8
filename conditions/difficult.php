<?php
$number = 120;
if ($number > 0 && $number <= 10) {
    echo "$number меньше 10 и больше 0";
} elseif ($number > 10 && $number <= 100) {
    echo "$number меньше 100 и больше 10";
} elseif ($number > 100 && $number <= 1000) {
    echo "$number меньше 1000 и больше 100";
} else {
    echo "$number больше 1000 или меньше 0";
}
