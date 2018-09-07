<?php

namespace App\Controllers;

use App\Models\User;
use Philo\Blade\Blade;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource or a single item.
     *
     * @var $id
     */
    public function index($id)
    {
        $users = User::users($id);

        $blade = new Blade($this->views, $this->cache);

        echo $blade->view()->make('users', ['users' => $users])->render();
    }
}