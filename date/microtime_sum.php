<?php
[$frac, $sec] = explode(' ', microtime());
$time = $frac + $sec;

echo $sec;              // 1652606425
echo '<br />' . PHP_EOL;
echo $frac;             // 0.78298100
echo '<br />' . PHP_EOL;
echo $time;             // 1652606425.783
