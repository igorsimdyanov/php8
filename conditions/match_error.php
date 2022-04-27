<?php
$day = match('PHP') {
        'Jan', 'Mar', 'May', 'Jul', 'Aug', 'Oct', 'Dec' => 31,
        'Apr', 'Jun', 'Sep', 'Nov' => 30,
        'Feb' => 28,
    };
echo $day; // PHP Fatal error: Uncaught UnhandledMatchError: Unhandled match case 'PHP'
