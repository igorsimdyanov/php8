<?php
namespace MVC\Controllers;

class Router
{
    public string $model;
    public ?string $ext;
    public ?int $id;

    public static function parse(string $path) : Router
    {
        list($path, $ext) = explode('.', $path);
        $arr = explode('/', $path);
        return new self($arr[0], $ext, count($arr) > 1 ? $arr[1] : null);
    }

    private function __construct(
        string $model,
        ?string $ext = null,
        ?int $id = null)
    {
        $this->model = $model;
        $this->ext = $ext;
        $this->id = $id;
    }
}
