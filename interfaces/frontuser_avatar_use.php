<?php
require_once 'frontuser_avatar.php';

$user = new FrontUser(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

$user->setImage('avatar.png');
echo $user->getImage(); // avatar.png
