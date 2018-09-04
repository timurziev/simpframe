<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller {

    public function index()
    {
        $users = User::users();

        return $this->view('users', ['users' => $users]);
    }
}