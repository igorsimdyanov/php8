<?php
$url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
$arr = parse_url($url);

echo '<pre>';
print_r($arr);
echo '<pre>';
