<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, callable $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function post(string $uri, callable $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    public function dispatch(string $uri, string $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

    // eliminar carpeta del proyecto automáticamente
    $basePath = dirname($_SERVER['SCRIPT_NAME']);
    $uri = str_replace($basePath, '', $uri);

        if ($uri === '' || $uri === false) {
            $uri = '/';
        }

        if (isset($this->routes[$method][$uri])) {
            call_user_func($this->routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo "404 - Página no encontrada";
        }
    }
}
