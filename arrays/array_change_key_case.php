<?php
$arr = ['FirSt' => 1, 'SecOnd' => 4];
$arr = array_change_key_case($arr, CASE_UPPER);

echo '<pre>';
print_r($arr);
echo '</pre>';
