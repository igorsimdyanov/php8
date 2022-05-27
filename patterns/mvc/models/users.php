<?php
namespace MVC\models;

class Users
{
    public $collection;

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
        $this->collection = $users;
    }
}
