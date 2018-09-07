<?php

namespace App\Models;

class User extends Model {

    public static function users($id)
    {
        return static::items('users', $id);
    }
}