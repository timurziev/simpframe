<?php

namespace App\Controllers;

class MainController extends Controller {

    public function index()
    {
        $var = ['hello', 'world'];
        $this->view('home', ['var' => $var]);
    }
}