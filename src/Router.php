<?php

namespace FrameworkSav;

class Router
{
    private $routes = [];

    public function add($route, $action)
    {
        $this->routes[$route] = $action;
    }

    public function dispatch($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            call_user_func($this->routes[$uri]);
        } else {
            echo "404 - Not Found";
        }
    }
}
