<?php
$cat = dir('.');

while (($file = readdir($cat->handle)) !== false) {
    echo $file . '<br />';
}

closedir($cat->handle);
