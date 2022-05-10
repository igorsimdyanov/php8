<?php
$correct = 'igorsimdyanov@gmail.com';
$wrong   = 'igorsimdyanov@//gmail.com';
echo 'correct=' . filter_var($correct, FILTER_VALIDATE_EMAIL) . '<br />';
echo 'wrong=' . filter_var($wrong, FILTER_VALIDATE_EMAIL) . '<br />';
