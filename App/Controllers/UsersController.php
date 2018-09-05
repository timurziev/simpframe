<?php

namespace App\Controllers;

use App\Models\User;
use Philo\Blade\Blade;

class UsersController extends Controller {

    public function index()
    {
        $users = User::users();

        $blade = new Blade($this->views, $this->cache);
        echo $blade->view()->make('users', ['users' => $users])->render();
    }
}