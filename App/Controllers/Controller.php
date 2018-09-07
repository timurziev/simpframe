<?php
namespace App\Controllers;

class Controller
{
    protected $views;
    protected $cache;

    /**
     * Define paths for directories
     *
     */
    public function __construct()
    {
        $this->views = dirname(__DIR__) . '../../views';
        $this->cache = dirname(__DIR__) . '../../cache';
    }

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