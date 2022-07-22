<?php
function crange($size)
{
    for ($i = 0; $i < $size; $i++) {
        yield $i;
    }
}

$range = crange(1024000);
foreach ($range as $i) echo "$i ";
echo '<br />' . PHP_EOL;
echo memory_get_usage();
