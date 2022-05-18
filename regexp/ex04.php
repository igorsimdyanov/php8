<?php
$str = " 15-16/2000       "; // к примеру
$re = '{
  ^\s*(                  # начало строки
    (\d+)                  # день
      \s* [[:punct:]] \s*  # разделитель
    (\d+)                  # месяц
      \s* [[:punct:]] \s*  # разделитель
    (\d+)                  # год
  )\s*$                  # конец строки
}xs';

// Разбиваем строку на куски при помощи preg_match()
preg_match($re, $str, $matches) or exit("Not a date: $str");

// Теперь разбираемся с карманами
echo "Дата без пробелов: '$matches[1]' <br />";
echo "День: $matches[2] <br />";
echo "Месяц: $matches[3] <br />";
echo "Год: $matches[4] <br />";
