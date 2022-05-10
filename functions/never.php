<?php
function fail() : never
{
    trigger_error('Эта функция никогда не завершится', E_USER_ERROR);
    // ...
}

fail(); // PHP Fatal error:  Эта функция никогда не завершится
