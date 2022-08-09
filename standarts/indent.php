<?php
function tabber($spaces, $echo, ...$planets) : void
{
    $new = [];

    foreach ($planets as $planet) {
        $new[] = str_repeat('&nbsp;', $spaces) . $planet;
    }

    $echo(...$new);
}
