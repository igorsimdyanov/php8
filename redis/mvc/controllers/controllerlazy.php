<?php
namespace MVC\Controllers;

class ControllerLazy
{
    public string $path;
    private string $class;
    private Router $router;
    private object $model;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function render() : string
    {
        $decorator = \MVC\Decorators\DecoratorFactory::create(
            $this->getClass(),
            $this->getModel());
        $view = \MVC\Views\ViewFactory::create(
            $this->getRouter()->ext,
            $this->getClass(),
            $decorator);

        return $view->render();
    }

    private function getClass() : string
    {
        if (empty($this->class)) {
            $class = get_class($this->getModel());
            $this->class = substr($class, strrpos($class, '\\') + 1);
        }

        return $this->class;
    }

    private function getRouter() : Router
    {
        if (empty($this->router)) {
            $this->router = Router::parse($this->path);
        }

        return $this->router;
    }

    private function getModel() : object
    {
        if (empty($this->model)) {
            $class = 'MVC\\Models\\' .
                     ucfirst($this->getRouter()->model);
            $this->model = new $class();
            if ($this->getRouter()->id) {
                $this->model = 
                    $this->model->collection[$this->getRouter()->id];
            }
        }

        return $this->model;
    }
}
