<?php
$lines = fopen('largetextfile.txt', 'r');

for ($i = 0; $current = fgets($lines, 10_000); $i++) {
    if (rand(0, $i) == 0) $line = $current;
}
echo $line;
