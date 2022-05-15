<?php
echo date('d.m.Y H:i:s');                   // 15.05.2022 16:10:10
date_default_timezone_set('Europe/Moscow');
echo '<br />' . PHP_EOL;
echo date('d.m.Y H:i:s');                   // 15.05.2022 19:10:10
