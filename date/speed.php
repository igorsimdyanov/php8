<?php
define('START_TIME', microtime(true));

for ($i = 0; $i < 5; $i++) {
    sleep(1);
}

printf('Время работы скрипта: %.5f с', microtime(true) - START_TIME);
