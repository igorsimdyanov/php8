<?php
require_once 'user.php';

$user = new User(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo $user->fullName(); // Игорь Симдянов
