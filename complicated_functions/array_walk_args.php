<?php
$extensions = [
    'php' => 'PHP',
    '*.py' => 'Python',
    'rb' => 'Ruby',
    '*.js' => 'JavaScript'
];

function print_array(string $item, string $key, bool $add_dot = false) : void
{
    $prefix = '*.';
    if ($add_dot && strpos($key, $prefix) !== 0) {
        $key = $prefix . $key;
    }
    echo "$key: $item< /br>" . PHP_EOL;
}

array_walk($extensions, 'print_array', true);
