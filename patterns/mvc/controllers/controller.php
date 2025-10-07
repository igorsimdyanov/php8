<?php
namespace MVC\Controllers;

class Controller
{
    public string $path;
    public Router $router;
    public object $model;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->router = Router::parse($path);
        $class = 'MVC\\Models\\' . ucfirst($this->router->model);
        $this->model = new $class();
        if ($this->router->id !== null) {
            $this->model = $this->model->collection[$this->router->id];
        }
    }

    public function render() : string
    {
        $class = get_class($this->model);
        $class = substr($class, strrpos($class, '\\') + 1);
        $decorator = \MVC\Decorators\DecoratorFactory::create(
            $class,
            $this->model);
        $view = \MVC\Views\ViewFactory::create(
            $this->router->ext,
            $class,
            $decorator);

        return $view->render();
    }
}
