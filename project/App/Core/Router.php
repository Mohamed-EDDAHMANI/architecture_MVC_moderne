<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function get($route, $controller): void
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function post($route, $controller): void
    {
        $this->routes['POST'][$route] = $controller;
    }

    public function dispatch($url, $method)
    {
        // var_dump($url);
        // exit;

        $path = parse_url($url, PHP_URL_PATH);
        $path = str_replace('/', '', $path);

        if (isset($this->routes[$method][$path])) {

            $frontArray = [
                'HomeController',
                'ArticleController',
                'LoginController'
            ];

            if (in_array($this->routes[$method][$path], $frontArray)) {

                $pathController = "App\\controllers\\front\\";

            } else {
                $pathController = "App\\controllers\\back\\";
            }

            $controllerName = $pathController . $this->routes[$method][$path];

            // echo '<pre>';
            // var_dump(  $path);
            // echo '<pre>';
            // exit;

            if (class_exists($controllerName) && method_exists($controllerName, $path)) {

                $controller = new $controllerName();

                $controller->$path();
                return;
            }
        }

        echo "404 - Page not found";
    }
}
