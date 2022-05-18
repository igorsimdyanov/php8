<?php
// Проверить, что в строке есть число (одна цифра или более)
preg_match('/\d+/s', 'article_123.html', $matches);

// Совпадение окажется в $matches[0]
echo $matches[0]; // выводит 123
