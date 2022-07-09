<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'dmitry.koterov@gmail.com',
                 'password',
                 'Дмитрий',
                 'Котеров'),
            new User(
                 'igorsimdyanov@gmail.com',
                 'password',
                 'Игорь',
                 'Симдянов')
        ];
        parent::__construct($users);
    }
}
