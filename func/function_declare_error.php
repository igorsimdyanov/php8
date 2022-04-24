<?php
$flag = true;

if ($flag) {
    echo convertToGrams(); // Fatal error: Uncaught Error: Call to undefined function
}

if ($flag) {
    function convertToGrams()
    {
        $result = 5 * 1_000;
        echo $result;
    }
}
