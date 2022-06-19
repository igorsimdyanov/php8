<?php
function tabber($spaces, $echo, ...$planets)
{
    $new = [];

    foreach ($planets as $planet) {
        $new[] = str_repeat('&nbsp;', $spaces) . $planet;
    }

    $echo(...$new);
}
