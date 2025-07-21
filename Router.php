<?php

declare(strict_types=1);
class Router
{
    private array $routes = [];

    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalisePath($path);

        $this->routes[] = ['path' => $path, 'method' => strtoupper($method), 'controller' => $controller, 'middlewares' => []];
    }

    public function dispatch(string $path)
    {
        $path = $this->normalisePath($path);
        $method = strtoupper($_SERVER['REQUEST_METHOD']);

        foreach ($this->routes as $route) {
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
                continue;
            }

            [$class, $function] = $route['controller'];

            $controllerInstance = new $class;

            $controllerInstance->{$function}();
        }
    }

    private function normalisePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";

        $path = preg_replace('#[/]{2,}#', '/', $path);

        return $path;
    }
}
