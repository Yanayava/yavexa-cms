<?php

namespace Core;

class Router
{
    protected array $routes = [];

    public function get(string $uri, callable $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function post(string $uri, callable $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = strtok($_SERVER['REQUEST_URI'], '?');

        $callback = $this->routes[$method][$uri] ?? null;

        if ($callback) {
            call_user_func($callback);
        } else {
            http_response_code(404);
            echo "<h1>404 | Not Found</h1>";
        }
    }
}
