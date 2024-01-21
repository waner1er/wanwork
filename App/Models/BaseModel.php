<?php

namespace App\Models;

use PDO;
use App\Configuration\Helpers;

class BaseModel {
    protected static $table;

    public static function getAll() {
        $db = Helpers::dbConnect();
        $query = $db->prepare("SELECT * FROM " . static::$table);
        $query->execute();

        $results = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $results[] = new static($row);
        }

        return $results;
    }


    public static function where($column, $operator, $value) {
        $db = Helpers::dbConnect();
        $query = $db->prepare("SELECT * FROM " . static::$table . " WHERE " . $column . " " . $operator . " '" . $value . "'");
        $query->execute();

        $results = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }

        return $results;
    }

    public static function first($column, $operator, $value) {
            $db = Helpers::dbConnect();
            $sql = "SELECT * FROM " . static::$table . " WHERE " . $column . " " . $operator . " '" . $value . "'";
            $query = $db->prepare($sql);
            $query->execute();
        
            $results = static::where($column, $operator, $value);
            return new static ($results[0] ?? []);
    }
}