<?php
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) != 0) {
          continue;
        } else {
            $flag = true;
            break;
        }
    }
    if (!$flag) echo "$i ";
    $flag = false;
}
