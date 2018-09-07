<?php

namespace App\Controllers;

use App\Models\User;

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

        return static::view('users', $users);
    }
}