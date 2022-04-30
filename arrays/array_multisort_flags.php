<?php
$fst = [3, 4, 2, 7, 1, 5];
$snd = ['world', 'Hello', 'yes', 'no', 'apple', 'wet'];
array_multisort($fst, SORT_DESC, SORT_NUMERIC, $snd);
echo '<pre>';
print_r($fst);
print_r($snd);
echo '</pre>';
