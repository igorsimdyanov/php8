<?php
namespace MVC\Controllers;

class Router
{
    object public $model;
    ?string public $ext;
    int public $id;

    public static function parse($path) : Router
    {
        list($path, $ext) = explode('.', $path);
        $arr = explode('/', $path);
        return new self($arr[0], $ext, count($arr) > 1 ? $arr[1] : null);
    }

    private function __construct(object $model, ?string $ext = null, int $id = null)
    {
        $this->model = $model;
        $this->ext = $ext;
        $this->id = $id;
    }
}
