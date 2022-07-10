<?php
require_once 'config.php';

// Установка/извлечение ключа
$redis->set('key', 'value');
echo $redis->get('key'); // value
echo '<br />';

// Установка ключа на 10 мс
$redis->set('hello', 'world', 10);
echo $redis->get('hello'); // world
echo '<br />';

// Установка сразу нескольких ключей
$redis->mSet(['fst' => 'первый', 'snd' => 'второй']);
echo $redis->get('snd'); // второй
echo '<br />';

if ($redis->exists('fst')) {
    echo $redis->get('fst'); // первый
}
