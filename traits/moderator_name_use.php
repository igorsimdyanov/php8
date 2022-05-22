<?php
require_once 'moderator_name.php';

$user = new Moderator(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo $user->fullName(); // Игорь Симдянов (модератор)
