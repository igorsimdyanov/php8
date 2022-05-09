<?php
$url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
echo parse_url($url, PHP_URL_HOST); // www.site.ru
