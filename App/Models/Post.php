<?php

namespace App\Models;

use PDO;

class Post extends Model {

    public static function posts($id)
    {
        $db = static::DB();
        $sql = isset($id) ? "SELECT * FROM posts WHERE id = $id" : "SELECT * FROM posts";
        $result = $db->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}