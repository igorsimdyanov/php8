<?php
$dir = new DirectoryIterator('.');

foreach ($dir as $file) {
    if ($file->isFile()) {
        echo $file . ' ' .$file->getSize() . '<br />';
    }
}
