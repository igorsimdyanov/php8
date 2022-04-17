<?php
$do_for = true;
$i = 0;
for (; $do_for; )
{
    $i++;
    echo "$i<br />";
    if ($i > 5) $do_for = false;
}
