<?php

namespace App\Models;

use PDO;
use Config\Database;

abstract class Model
{

    /**
     * Connect to the database
     *
     * @return mixed
     */
    protected static function DB()
    {
        $database = 'mysql:host=' . Database::DB_HOST . ';dbname=' . Database::DB_NAME . ';charset=utf8;port=3307';
        $db = new PDO($database, Database::DB_USER, Database::DB_PASSWORD);

        // In case of error return an exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}
