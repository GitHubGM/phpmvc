<?php
namespace App;

class Router {
    protected $routes = [];

    private function addRoute($route, $controller, $action, $method) {
        $this->routes[$method][$route] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function get($route, $controller, $action) {
        $this->addRoute($route, $controller, $action, 'GET');
    }

    public function post($route, $controller, $action) {
        $this->addRoute($route, $controller, $action, 'POST');
    }

    public function dispatch() {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];
        // var_dump($uri, $method, $this->routes); 

        if (isset($this->routes[$method][$uri])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];
            $controllerInstance = new $controller(); // Corrected variable name
            $controllerInstance->$action();
        } else {
            echo "404 Not Found";
        }
    }
}
