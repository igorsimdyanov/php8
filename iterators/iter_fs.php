<?php
spl_autoload_register();

$dir = new Iterators\FSDirectory('.');

foreach ($dir as $path => $entry) {
    // Если это файл, а не подкаталог...
    if ($entry instanceof Iterators\FSFile) {
        echo "<tt>$path</tt>: " . $entry->getSize() . '<br />';
    }
}
