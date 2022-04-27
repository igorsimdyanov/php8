<?php
$date = new DateTime();
switch($date->format('M'))
{
    case 'Jan':
    case 'Mar':
    case 'May':
    case 'Jul':
    case 'Aug':
    case 'Oct':
    case 'Dec':
        $day = 31;
        break;
    case 'Apr':
    case 'Jun':
    case 'Sep':
    case 'Nov':
        $day = 30;
        break;
    case 'Feb':
        $day = 28;
        break;
}
echo $day;
