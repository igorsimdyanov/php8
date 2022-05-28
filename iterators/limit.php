<?php
spl_autoload_register();

$limit = new LimitIterator(
            new Iterators\ExtensionFilter(
                new DirectoryIterator('.'), 'php'
            ),
            0,
            5);

foreach($limit as $file) {
    echo $file . '<br />';
}
