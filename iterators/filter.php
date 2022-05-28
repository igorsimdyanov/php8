<?php
spl_autoload_register();

$filter = new Iterators\ExtensionFilter(
                new DirectoryIterator('.'),
                'php'
              );

foreach($filter as $file) {
    echo $file . '<br />';
}
