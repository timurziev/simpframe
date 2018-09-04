<?php

namespace App\Models;

use PDO;

class User extends Model {

    public static function users()
    {
        $db = static::DB();
        $result = $db->query('SELECT id, name, email FROM users');
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}