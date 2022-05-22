<?php
require_once 'moderator.php';

$user = new Moderator(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

$user->setImage('avatar.png');
echo $user->getImage(); // avatar.png
