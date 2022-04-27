<?php
$number = 120;
echo match (true) {
        $number > 0 && $number <= 10 => "$number меньше 10 и больше 0",
        $number > 10 && $number <= 100 => "$number меньше 100 и больше 10",
        $number > 100 && $number <= 1000 => "$number меньше 1000 и больше 100",
        $number >= 1000 => "$number больше 1000 или меньше 0"
    }; // 120 меньше 1000 и больше 100
