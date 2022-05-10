<?php
$extensions = [
    'langs' => [
        'PHP' => 'php',
        'Python' => 'py',
        'Ruby' => 'rb',
        'JavaScript' => 'js'
    ],
    'databases' => [
        'PostgreSQL' => 'sql',
        'MySQL' => 'sql',
        'SQLite' => 'sql',
        'ClickHouse' => 'sql',
        'MongoDB' => 'js',
        'Redis' => 'own'
    ]
];

function print_array(string $item, string $key) : void
{
    echo "$key: $item< /br>" . PHP_EOL;
}

$handler = 'print_array';
array_walk_recursive($extensions, $handler);
