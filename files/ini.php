<?php
$ini = parse_ini_file('file.ini', true);

echo '<pre>';
print_r($ini);
echo '</pre>';

echo "Chip: {$ini['File Settings']['Chip']}";
