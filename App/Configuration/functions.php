<?php BASEDIR . 'vendor/autoload.php';


/**
 *  Helpers functions
 *  asset() : return the path of the asset
 *  wandump() : return the var_dump of the data
 *  view() : return the path of the view
 * 
 *  
 */

if (!function_exists('asset')) {
    function asset($path)
    {
        $base = dirname($_SERVER['PHP_SELF']);
        $path_returned = $base .  '/Assets/' . $path;
        echo $path_returned;
        return $path_returned;
    }
}

if (!function_exists('wandump')) {
    function wandump($data)
    {
        echo '<pre class="wan-dump">';
        var_dump($data);
        echo '</pre>';
        die();
    }
}

if (!function_exists('view')) {
    function view($view)
    {
        $view = VIEW . $view . '.php';
        return $view;
    }
}