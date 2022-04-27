<?php
$date = new DateTime();
$day = match($date->format('M')) {
        'Jan', 'Mar', 'May', 'Jul', 'Aug', 'Oct', 'Dec' => 31,
        'Apr', 'Jun', 'Sep', 'Nov' => 30,
        'Feb' => 28,
    };
echo $day;
