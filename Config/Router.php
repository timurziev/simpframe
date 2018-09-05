<?php

namespace Config;

/**
 * Router
 */
class Router {
    
    /*
     * Manage routes
     *
     * @param string $route
     * @param array $parameters
     */
    public static function route($route) {
        $params = explode('/', $route);

        $controller = 'App\\Controllers\\' . ($params[2] ? ucfirst($params[2]) : 'Main') . 'Controller';

        $controller = new $controller;

        $controller->index();
    }
}