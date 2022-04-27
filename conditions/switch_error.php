<?php
$date = new DateTime();
$day = switch($date->format('M'))
    {
        case 'Jan':
        case 'Mar':
        case 'May':
        case 'Jul':
        case 'Aug':
        case 'Oct':
        case 'Dec':
            31;
            break;
        case 'Apr':
        case 'Jun':
        case 'Sep':
        case 'Nov':
            30;
            break;
        case 'Feb':
            28;
            break;
    }
echo $day;
