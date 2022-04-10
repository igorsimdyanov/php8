<?php
$first = 5;
$second = &$first;
$second = 1;
echo $first; // 1
