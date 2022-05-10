<?php
$correct = 'igorsimdyanov@gmail.com';
$wrong   = 'igorsimdyanov@//gmail.com';
echo filter_var($correct, FILTER_SANITIZE_EMAIL) . '<br />';
echo filter_var($wrong, FILTER_SANITIZE_EMAIL) . '<br />';
