<?php
function fail() : never
{
    trigger_error('Эта фукнция никогда не завершится', E_USER_ERROR);
    // ...
}

fail(); // PHP Fatal error:  Эта фукнция никогда не завершится
