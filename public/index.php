<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Config\Router;

Router::route(['controller' => 'Main', 'action' => 'index']);