<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Config\Router;

$uri = $_SERVER['REQUEST_URI'];

Router::route($uri);