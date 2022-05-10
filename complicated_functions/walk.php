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
function walk(array $array, callable $callback) : void
{
    foreach($array as $key => $value) {
        $callback($value, $key);
    }
}

walk($extensions, 'print_array');
