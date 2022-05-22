<?php
require_once('moderator_name_asterisk.php');

$user = new Moderator(
    'igorsimdyanov@gmail.com',
    'password',
    'Игорь',
    'Симдянов');

echo $user->fullName(); // Игорь Симдянов*
