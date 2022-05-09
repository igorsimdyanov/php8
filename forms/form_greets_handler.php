<?php
if(!empty($_POST['name'])) {
    $url = 'greets.php?name=' . urlencode($_POST['name']);
    header("location: $url");
    exit();
}
