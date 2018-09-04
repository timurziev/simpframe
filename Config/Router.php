<?php

namespace Config;

/**
 * Router
 */
class Router {

    protected $routes = [];
    protected $parameters = [];

    /*
     * Manage routes
     *
     * @param string $route
     * @param array $parameters
     */
    public static function route($route, $parameters = []) {
        print_r($route) ;
    }
}