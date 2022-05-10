<?php
$extensions = [
    'php' => 'PHP',
    'py' => 'Python',
    'rb' => 'Ruby',
    'js' => 'JavaScript'
];

function print_array(string $item, string $key) : void
{
    echo "$key: $item< /br>" . PHP_EOL;
}

array_walk($extensions, 'print_array');
