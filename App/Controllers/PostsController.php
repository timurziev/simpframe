<?php

namespace App\Controllers;

use App\Models\Post;
use Philo\Blade\Blade;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource or a single item.
     *
     * @var $id
     */
    public function index($id)
    {
        $posts = Post::posts($id);

        $blade = new Blade($this->views, $this->cache);

        echo $blade->view()->make('posts', ['posts' => $posts])->render();
    }
}