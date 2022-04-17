<?php
$answer = 'yes';
switch($answer):
    case 'yes':
        echo 'Продолжаем работу!';
        break;
    case 'no':
        echo 'Завершаем работу';
        break;
    default:
        echo 'Некорректный ввод';
endswitch;
