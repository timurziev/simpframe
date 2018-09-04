<?php
namespace App\Controllers;

class Controller
{
    /**
     * Render a view file
     *
     * @param string $view
     * @param array $params
     *
     * @return void
     */
    public static function view($view, $params = [])
    {
        extract($params, EXTR_SKIP);

        require $file = dirname(__DIR__) . "/..\\views\\$view.php";
    }
}