<?php
$dir = new DirectoryIterator('.');
foreach($dir as $file) {
    echo $file . '<br />';
}
