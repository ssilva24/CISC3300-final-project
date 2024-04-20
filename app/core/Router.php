<?php

namespace app\core;

use app\controllers\MainController;

class Router
{
    public $routeList;
    
    function __construct($routes)
    {
        $this->routeList = $routes;
    }

    public function serveRoute() {
        $uriParse = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $method = $_SERVER['REQUEST_METHOD'];

        if ($uriParse[0]) {
            $route = $this->routeList[$uriParse[0]];
            if ($route) {
                $controllerName = $route['controller'];
                $action = $route[$method];
                $controller = new $controllerName();
                
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    $homepageController = new MainController();
                    $homepageController->notFound();
                }
            } else {
                $homepageController = new MainController();
                $homepageController->notFound();
            }
        } else {
            if ($method === 'POST') {
                $contactController = new \app\controllers\ContactController();
                $contactController->processContactForm();
            } else {
                $homepageController = new MainController();
                $homepageController->homepage();
            }
        }
    }
}
