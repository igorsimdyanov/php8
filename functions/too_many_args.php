<?php
function tooManyArgs($fst, $snd, $thd, $fth)
{
    echo "Первый параметр: $fst<br />";
    echo "Второй параметр: $snd<br />";
    echo "Третий параметр: $thd<br />";
    echo "Четвертый параметр: $fth<br />";
}

$items = ['PHP', 'Python', 'Ruby', 'JavaScript'];
tooManyArgs(...$items);
