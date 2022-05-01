<?php
$rand = 'rand';
$func = 'not_existed_function';

echo $rand(); // 1549131126
echo $func(); // PHP Fatal error: Uncaught Error: Call to undefined function not_existed_function()
