<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        if(is_null($users))
        {
            $users = [
                new User(
                     'makkuz@yandex.ru',
                     'password',
                     'Максим',
                     'Кузнецов'),
                new User(
                     'igorsimdyanov@gmail.com',
                     'password',
                     'Игорь',
                     'Симдянов')
            ];
        }
        parent::__construct($users);
    }

    public function render() : string
    {
        return implode('<br />', parent::render());
    }
}
