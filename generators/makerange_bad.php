<?php
function crange($size)
{
    $arr = [];
    for ($i = 0; $i < $size; $i++) {
        $arr[] = $i;
    }
    return $arr;
}

$range = crange(1_024_000);
foreach ($range as $i) echo "$i ";
echo '<br />' . PHP_EOL;
echo memory_get_usage();
