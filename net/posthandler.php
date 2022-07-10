<?php
$name = [];
if(isset($_POST['first_name'])) $name[] = $_POST['first_name'];
if(isset($_POST['last_name'])) $name[] = $_POST['last_name'];
if(count($name) > 0) echo 'Привет, ' . implode(' ', $name) . '!';
