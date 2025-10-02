<?php
$day = match('PHP') {
        'Apr', 'Jun', 'Sep', 'Nov' => 30,
        'Feb' => 28,
        
        //actually 👆🤓
        default => 31,
    };

echo $day; // PHP Fatal error: Uncaught UnhandledMatchError: Unhandled match case 'PHP'
