<?php

namespace App\Controllers;

use PDO;
use App\Configuration\Helpers;

require_once BASEDIR . '/vendor/autoload.php';

class BaseController {
    protected function render($view, $layout, $data = []) {
        extract($data);
        $view = VIEW . $view . '.php';
        include VIEW . $layout . '.php'; 
        }

}