<?php
$str = '04.05.2022';
echo 'день - ' . substr($str, 0, 2) . '<br />';  // день - 04
echo 'месяц - ' . substr($str, 3, 2) . '<br />'; // месяц - 05
echo 'год - ' . substr($str, 6) . '<br />';      // год - 2022
