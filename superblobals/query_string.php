<?php
if(isset($_SERVER['QUERY_STRING'])) {
    echo urldecode($_SERVER['QUERY_STRING']);
}
