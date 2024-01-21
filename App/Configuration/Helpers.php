<?php 

namespace App\Configuration;

class Helpers {
    /**
     * Helpers functions
     * asset() : return the path of the asset
     * @param string $path  : the path of the asset
     */
    public static function asset($path) {
        $base = dirname($_SERVER['PHP_SELF']);
        $path_returned = $base .  'Assets/' . $path;
        echo $path_returned;
        return $path_returned;
    }


    /**
     * Helpers functions
     * wandump() : return the var_dump of the data
     * @param string $data  : the data to dump
     */
    function wandump($data) {
        echo '<pre class="wan-dump">';
        var_dump($data);
        echo '</pre>';
        die();
    }

    /**
     * Helpers functions
     * view() : return the path of the view
     * @param string $view  : the path of the view
     */
    public static function view($view, $layout) {
        $view = VIEW . $view . '.php';
        include VIEW . $layout; 
    }

    /**
     * Helpers functions
     * dbConnect() : return the connection to the database
     * TODO : Construct the connection to the database with the right way
     */
    public static function dbConnect() {
        $dbpath = BASEDIR . 'App/Database/database.sqlite';
        $db = new \PDO("sqlite:$dbpath");
        return $db;
    }
}