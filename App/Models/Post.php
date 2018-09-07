<?php

namespace App\Models;

class Post extends Model {

    public static function posts($id)
    {
        return static::items('posts', $id);
    }
}