<?php
namespace MVC\Decorators;

class UsersDecorator extends DecoratorFactory
{
    public $users;

    public function __construct(\MVC\Models\Users $users)
    {
        $this->users = $users;
    }

    public function title() : string
    {
       return 'Пользователи';
    }

    public function collection_render(
        callable $call,
        string $separator = '<br />') : string
    {
        return implode(
                   $separator,
                   array_map($call, $this->users->collection)
               );
    }

    public function body() : string
    {
        return $this->collection_render(
            function($item){
                $decorated_item = new UserDecorator($item);
                return $decorated_item->body();
            });
    }

    public function items() : string
    {
        return $this->collection_render(
            function($item){
                $decorated_item = new UserDecorator($item);
                return $decorated_item->items();
            }, '');
    }
}
