<?php
require_once 'minmax_static.php';

echo MinMax::min(43, 18, 5, 61, 23, 10, 56, 36); // 5
echo '<br />';
echo MinMax::max(43, 18, 5, 61, 23); // 61
