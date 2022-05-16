<?php
$date = new DateTime('2023-01-01 00:00:00',
                     new DateTimeZone('Europe/Moscow'));
echo $date->format('d.m.Y H:i:s P'); // 01.01.2023 00:00:00 +03:00
